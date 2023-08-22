<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:developers']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $developer=Developer::with(['createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $developer->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhere( 'email', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $developer=$developer->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $developer=$developer->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $developer->paginate($request->numRows);
        }else{
            return $developer->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_developer')){
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'email'=>'required|string|email|max:64|unique:developers',
                'image'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'address'=>'nullable',
                'phone_number'=>'nullable',
                'whatsapp_number'=>'nullable',
                'description'=>'nullable',
            ]);
            if($request['image']){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                \Image::make($request->image)->save(public_path('images/developers/').$name);
            }else{
                $name="profile.png";
            }

            $developer = new Developer();
            $developer->name=$request->name;
            $developer->email=$request->email;
            $developer->image=$name;
            $developer->latitude = $request->latitude;
            $developer->longitude = $request->longitude;
            $developer->address = $request->address;
            $developer->phone_number = $request->phone_number;
            $developer->whatsapp_number = $request->whatsapp_number;
            $developer->description = $request->description;
            $developer->created_by = Auth::user()->id;
            $developer->created_at = Carbon::now();
            $developer->save();
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_developer')){
            $developer = Developer::findOrfail($id);
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'email'=>'required|string|email|max:64|unique:developers,email,'.$developer->id,
                'image'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'address'=>'nullable',
                'phone_number'=>'nullable',
                'whatsapp_number'=>'nullable',
                'description'=>'nullable',
            ]);
            if($request['image']!=$developer->image){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                $publicPath=public_path('images/developers/'.$name);
                \Image::make($request->image)->save($publicPath);
                if((file_exists(public_path('images/developers/'.$developer->image)))&&($developer->image!="profile.png")){
                    @unlink(public_path('images/developers/'.$developer->image));
                }
                $request->merge(['image'=>$name]);
            }
            $developer->updated_by = Auth::user()->id;
            $developer->updated_at = Carbon::now();
            $developer->update($request->all());
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_developer')){
            $developer = Developer::findOrfail($id);
            //Delete the developer
            if((file_exists(public_path('images/developers/'.$developer->image)))&&($developer->image!="profile.png")){
                @unlink(public_path('images/developers/'.$developer->image));
            }
            $developer->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmenityController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:amenities']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $amenities=Amenity::with(['createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $amenities->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $amenities=$amenities->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $amenities=$amenities->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $amenities->paginate($request->numRows);
        }else{
            return $amenities->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_amenity')){
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'image'=>'required',
            ]);
            if($request['image']){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                \Image::make($request->image)->save(public_path('images/amenities/').$name);
            }else{
                $name="profile.png";
            }

            $amenities = new Amenity();
            $amenities->name=$request->name;
            $amenities->image=$name;
            $amenities->created_by = Auth::user()->id;
            $amenities->created_at = Carbon::now();
            $amenities->save();
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_amenity')){
            $amenities = Amenity::findOrfail($id);
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'image'=>'required',
            ]);
            if($request['image']!=$amenities->image){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                $publicPath=public_path('images/amenities/'.$name);
                \Image::make($request->image)->save($publicPath);
                if((file_exists(public_path('images/amenities/'.$amenities->image)))&&($amenities->image!="profile.png")){
                    @unlink(public_path('images/amenities/'.$amenities->image));
                }
                $request->merge(['image'=>$name]);
            }
            $amenities->updated_by = Auth::user()->id;
            $amenities->updated_at = Carbon::now();
            $amenities->update($request->all());
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_amenity')){
            $amenities = Amenity::findOrfail($id);
            //Delete the user
            if((file_exists(public_path('images/amenities/'.$amenities->image)))){
                @unlink(public_path('images/amenities/'.$amenities->image));
            }
            $amenities->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

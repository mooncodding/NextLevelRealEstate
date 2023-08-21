<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PropertyStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyStatusController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:property_status']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $propertyStatus=PropertyStatus::with(['createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $propertyStatus->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $propertyStatus=$propertyStatus->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $propertyStatus=$propertyStatus->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $propertyStatus->paginate($request->numRows);
        }else{
            return $propertyStatus->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_property_status')){
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'image'=>'required',
            ]);
            if($request['image']){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                \Image::make($request->image)->save(public_path('images/property-status/').$name);
            }else{
                $name="profile.png";
            }

            $propertyStatus = new PropertyStatus();
            $propertyStatus->name=$request->name;
            $propertyStatus->image=$name;
            $propertyStatus->created_by = Auth::user()->id;
            $propertyStatus->created_at = Carbon::now();
            $propertyStatus->save();
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_property_status')){
            $propertyStatus = PropertyStatus::findOrfail($id);
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'image'=>'required',
            ]);
            if($request['image']!=$propertyStatus->image){
                $name=time().'.'.explode('/', explode(':', substr($request->image,0,strpos($request->image, ';')))[1])[1];
                $publicPath=public_path('images/property-status/'.$name);
                \Image::make($request->image)->save($publicPath);
                if((file_exists(public_path('images/property-status/'.$propertyStatus->image)))&&($propertyStatus->image!="profile.png")){
                    @unlink(public_path('images/property-status/'.$propertyStatus->image));
                }
                $request->merge(['image'=>$name]);
            }
            $propertyStatus->updated_by = Auth::user()->id;
            $propertyStatus->updated_at = Carbon::now();
            $propertyStatus->update($request->all());
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_property_status')){
            $propertyStatus = PropertyStatus::findOrfail($id);
            //Delete the user
            if((file_exists(public_path('images/property-status/'.$propertyStatus->image)))){
                @unlink(public_path('images/property-status/'.$propertyStatus->image));
            }
            $propertyStatus->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

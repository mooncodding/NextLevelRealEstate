<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:property_types']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $propertyType=PropertyType::with(['createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $propertyType->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $propertyType=$propertyType->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $propertyType=$propertyType->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $propertyType->paginate($request->numRows);
        }else{
            return $propertyType->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_property_type')){
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'description'=>'required',
                'banner_image'=>'nullable',
            ]);
            if($request['banner_image']){
                $name=time().'.'.explode('/', explode(':', substr($request->banner_image,0,strpos($request->banner_image, ';')))[1])[1];
                \Image::make($request->banner_image)->save(public_path('images/property_types/').$name);
            }else{
                $name="profile.png";
            }

            $propertyType = new PropertyType();
            $propertyType->name=$request->name;
            $propertyType->description=$request->description;
            $propertyType->banner_image=$name;
            $propertyType->save();
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_property_type')){
            $propertyType = PropertyType::findOrfail($id);
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'email'=>'required|string|email|max:64|unique:property_types,email,'.$propertyType->id,
                'password'=>'sometimes|string|min:8',
                'banner_image'=>'nullable',
            ]);
            if($request['password']!=""){
                $request->merge(['password'=>Hash::make($request['password'])]);
            }
            if($request['banner_image']!=$propertyType->banner_image){
                $name=time().'.'.explode('/', explode(':', substr($request->banner_image,0,strpos($request->banner_image, ';')))[1])[1];
                $publicPath=public_path('images/property_types/'.$name);
                \Image::make($request->banner_image)->save($publicPath);
                if((file_exists(public_path('images/property_types/'.$propertyType->banner_image)))&&($propertyType->banner_image!="profile.png")){
                    @unlink(public_path('images/property_types/'.$propertyType->banner_image));
                }
                $request->merge(['banner_image'=>$name]);
            }
            $propertyType->update($request->all());

            if($request->has('role')){
                $propertyTypeRole = $propertyType->getRoleNames();
                foreach($propertyTypeRole as $role){
                    $propertyType->removeRole($role);
                }

                $propertyType->assignRole($request->role);
            }
            $propertyType->save();
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_property_type')){
            $propertyType = PropertyType::findOrfail($id);
            //Delete the user
            if((file_exists(public_path('images/property_types/'.$propertyType->banner_image)))&&($propertyType->banner_image!="profile.png")){
                @unlink(public_path('images/property_types/'.$propertyType->banner_image));
            }
            $propertyType->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\AreaDeveloper;
use App\Models\AreaSecondaryImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:areas']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $areas=Area::with(['areaDevelopers','secondaryImages','createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $areas->where( 'title', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $areas=$areas->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $areas=$areas->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $areas->paginate($request->numRows);
        }else{
            return $areas->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_area')){
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'developer_id'=>'required',
                'featured_image'=>'required',
                'description'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'starting_price'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']){
                $name=time().'.'.explode('/', explode(':', substr($request->featured_image,0,strpos($request->featured_image, ';')))[1])[1];
                \Image::make($request->featured_image)->save(public_path('images/areas/').$name);
            }else{
                $name="profile.png";
            }

            $areas = new Area();
            $areas->title=$request->title;
            $areas->featured_image=$name;
            $areas->description = $request->description;
            $areas->latitude = $request->latitude;
            $areas->longitude = $request->longitude;
            $areas->starting_price = $request->starting_price;
            $areas->created_by = Auth::user()->id;
            $areas->created_at = Carbon::now();
            $areas->save();
            if ($areas) {
                // Save Multiple Developer
                foreach ($request->developer_id as  $value) {
                    $areaDevelopers = new AreaDeveloper();
                    $areaDevelopers->area_id = $areas->id;
                    $areaDevelopers->developer_id = $value['id'];
                    $areaDevelopers->created_at = Carbon::now();
                    $areaDevelopers->save();
                }
                // Save Multiple Images
                if ($request->secondary_images) {
                    foreach ($request->secondary_images as $value) {
                        if($value){
                            $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                            \Image::make($value)->save(public_path('images/areas/').$secondaryImageName);
                        }else{
                            $secondaryImageName="profile.png";
                        }
                        $areaImages = new AreaSecondaryImage();
                        $areaImages->area_id = $areas->id;
                        $areaImages->image = $secondaryImageName;
                        $areaImages->created_at = Carbon::now();
                        $areaImages->save();
                    }
                }
            }
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_area')){
            $areas = Area::findOrfail($id);
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'developer_id'=>'required',
                'featured_image'=>'required',
                'description'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'starting_price'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']!=$areas->featured_image){
                $name=time().'.'.explode('/', explode(':', substr($request['featured_image'],0,strpos($request['featured_image'], ';')))[1])[1];
                $publicPath=public_path('images/areas/'.$name);
                \Image::make($request['featured_image'])->save($publicPath);
                if((file_exists(public_path('images/areas/'.$areas->featured_image)))&&($areas->featured_image!="profile.png")){
                    @unlink(public_path('images/areas/'.$areas->featured_image));
                }
                $request->merge(['featured_image'=>$name]);
            }else{
                $name= $areas->featured_image;
            }
            $areas->title=$request->title;
            $areas->featured_image=$name;
            $areas->description = $request->description;
            $areas->latitude = $request->latitude;
            $areas->longitude = $request->longitude;
            $areas->starting_price = $request->starting_price;
            $areas->updated_by = Auth::user()->id;
            $areas->updated_at = Carbon::now();
            $areas->save();
            // Update Area Developer
            if ($areas) {
                $developerArray = [];
                // update record in areaDevelopers table
                if(isset($request['developer_id']) && $request['developer_id'] != ''){
                    // create array for developer_id
                    foreach($request['developer_id'] as $developer_id){
                        $developerArray[] = $developer_id['id'];
                    }
                }
                //Sync the record into areaDevelopers
                $areas->updateAreaDevelopers()->sync($developerArray);
            }
            // Save Multiple Images
            if ($request->secondary_images_copy) {
                foreach ($request->secondary_images_copy as $value) {
                    if($value){
                        $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                        \Image::make($value)->save(public_path('images/areas/').$secondaryImageName);
                    }else{
                        $secondaryImageName="profile.png";
                    }
                    $areaImages = new AreaSecondaryImage();
                    $areaImages->area_id = $areas->id;
                    $areaImages->image = $secondaryImageName;
                    $areaImages->created_at = Carbon::now();
                    $areaImages->save();
                }
            }
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_area')){
            $areas = Area::findOrfail($id);
            //Delete the area
            if((file_exists(public_path('images/areas/'.$areas->image)))&&($areas->image!="profile.png")){
                @unlink(public_path('images/areas/'.$areas->image));
            }
            $areas->deleteAreaDevelopers()->delete();
            $areas->secondaryImages()->delete();
            $areas->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

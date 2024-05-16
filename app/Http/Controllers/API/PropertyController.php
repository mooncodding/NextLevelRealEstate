<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectDocument;
use App\Models\ProjectSecondaryImage;
use App\Models\ProjectType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:projects']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $projects=Project::with(['projectTypes','projectDocuments','secondaryImages','createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $projects->where( 'title', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $projects=$projects->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $projects=$projects->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $projects->paginate($request->numRows);
        }else{
            return $projects->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_project')){
            $this->validate($request, [
                'title'=>'required|string|max:64',
                // 'starting_price'=>'required',
                'featured_image'=>'required',
                // 'developer_id'=>'required',
                // 'property_status_id'=>'required',
                // 'property_document_id'=>'required',
                // 'property_type_id'=>'required',
                'date_time'=>'required',
                // 'address'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'description'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']){
                $name=time().'.'.explode('/', explode(':', substr($request->featured_image,0,strpos($request->featured_image, ';')))[1])[1];
                \Image::make($request->featured_image)->save(public_path('images/projects/').$name);
            }else{
                $name="profile.png";
            }

            $projects = new Project();
            $projects->title=$request->title;
            $projects->starting_price=4;
            $projects->featured_image=$name;
            $projects->developer_id = 1;
            $projects->property_status_id = 1;
            $projects->date_time = Carbon::parse($request->date_time)->toDateTimeString();
            $projects->address = 'sdf';
            $projects->latitude = $request->latitude;
            $projects->longitude = $request->longitude;
            $projects->description = 'af';
            $projects->created_by = Auth::user()->id;
            $projects->created_at = Carbon::now();
            $projects->save();
            if ($projects) {
                // Save Multiple Project Categories
                // if (count($request->project_type_id) > 0) {
                //     foreach ($request->project_type_id as  $value) {
                //         $projectTypes = new ProjectType();
                //         $projectTypes->project_id = $projects->id;
                //         $projectTypes->property_type_id = $value['id'];
                //         $projectTypes->created_at = Carbon::now();
                //         $projectTypes->save();
                //     }
                // }
                // // Save Multiple Project Tags
                // if (count($request->project_document_id) > 0) {
                //     foreach ($request->project_document_id as  $value) {
                //         $projectDocuments = new ProjectDocument();
                //         $projectDocuments->title = $value['title'];
                //         $projectDocuments->file = $value['file'];
                //         $projectDocuments->project_id = $projects->id;
                //         $projectDocuments->created_at = Carbon::now();
                //         $projectDocuments->save();
                //     }
                // }
                // Save Multiple Images
                if ($request->secondary_images) {
                    foreach ($request->secondary_images as $value) {
                        if($value){
                            $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                            \Image::make($value)->save(public_path('images/projects/').$secondaryImageName);
                        }else{
                            $secondaryImageName="profile.png";
                        }
                        $projectImages = new ProjectSecondaryImage();
                        $projectImages->project_id = $projects->id;
                        $projectImages->image = $secondaryImageName;
                        $projectImages->created_at = Carbon::now();
                        $projectImages->save();
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
        if(auth()->user()->can('edit_project')){
            $projects = Project::findOrfail($id);
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'starting_price'=>'required',
                'featured_image'=>'required',
                'developer_id'=>'required',
                'property_status_id'=>'required',
                'property_document_id'=>'required',
                'property_type_id'=>'required',
                'date_time'=>'required',
                'address'=>'required',
                'latitude'=>'nullable',
                'longitude'=>'nullable',
                'description'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']!=$projects->featured_image){
                $name=time().'.'.explode('/', explode(':', substr($request['featured_image'],0,strpos($request['featured_image'], ';')))[1])[1];
                $publicPath=public_path('images/projects/'.$name);
                \Image::make($request['featured_image'])->save($publicPath);
                if((file_exists(public_path('images/projects/'.$projects->featured_image)))&&($projects->featured_image!="profile.png")){
                    @unlink(public_path('images/projects/'.$projects->featured_image));
                }
                $request->merge(['featured_image'=>$name]);
            }else{
                $name= $projects->featured_image;
            }
            if($request->date_time!=$projects->date_time){
                $request->merge(['date_time'=>Carbon::parse($request['date_time'])->toDateTimeString()]);
            }
            $projects->title=$request->title;
            $projects->featured_image=$name;
            $projects->description = $request->description;
            $projects->date_time = Carbon::parse($request->date_time)->toDateTimeString();
            $projects->updated_by = Auth::user()->id;
            $projects->updated_at = Carbon::now();
            $projects->save();
            // Update Project Developer
            if ($projects) {
                $projectArray = [];
                // update record in categoryProjects table
                if(isset($request['project_type_id']) && $request['project_type_id'] != ''){
                    // create array for project_type_id
                    foreach($request['project_type_id'] as $project_type_id){
                        $projectArray[] = $project_type_id['id'];
                    }
                }
                //Sync the record into categoryProjects
                $projects->updateProjectTypes()->sync($projectArray);
            }
            // Save Multiple Images
            if ($request->secondary_images_copy) {
                foreach ($request->secondary_images_copy as $value) {
                    if($value){
                        $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                        \Image::make($value)->save(public_path('images/projects/').$secondaryImageName);
                    }else{
                        $secondaryImageName="profile.png";
                    }
                    $projectImages = new ProjectSecondaryImage();
                    $projectImages->project_id = $projects->id;
                    $projectImages->image = $secondaryImageName;
                    $projectImages->created_at = Carbon::now();
                    $projectImages->save();
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
        if(auth()->user()->can('delete_project')){
            $projects = Project::findOrfail($id);
            //Delete the project
            if((file_exists(public_path('images/projects/'.$projects->featured_image)))&&($projects->featured_image!="profile.png")){
                @unlink(public_path('images/projects/'.$projects->featured_image));
            }
            $projects->deleteCategoryProjects()->delete();
            $projects->deleteProjectTags()->delete();
            $projects->secondaryImages()->delete();
            $projects->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:projects']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $projects=Project::with(['blogTags','secondaryImages','createdBy', 'updatedBy']);
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
        if(auth()->user()->can('create_blog')){
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'blog_category_id'=>'required',
                'tag_id'=>'required',
                'featured_image'=>'required',
                'description'=>'required',
                'date_time'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']){
                $name=time().'.'.explode('/', explode(':', substr($request->featured_image,0,strpos($request->featured_image, ';')))[1])[1];
                \Image::make($request->featured_image)->save(public_path('images/blogs/').$name);
            }else{
                $name="profile.png";
            }

            $projects = new Blog();
            $projects->title=$request->title;
            $projects->featured_image=$name;
            $projects->description = $request->description;
            $projects->date_time = Carbon::parse($request->date_time)->toDateTimeString();
            $projects->created_by = Auth::user()->id;
            $projects->created_at = Carbon::now();
            $projects->save();
            if ($projects) {
                // Save Multiple Blog Categories
                if (count($request->blog_category_id) > 0) {
                    foreach ($request->blog_category_id as  $value) {
                        $categoryBlogs = new CategoryBlog();
                        $categoryBlogs->blog_id = $projects->id;
                        $categoryBlogs->blog_category_id = $value['id'];
                        $categoryBlogs->created_at = Carbon::now();
                        $categoryBlogs->save();
                    }
                }
                // Save Multiple Blog Tags
                if (count($request->tag_id) > 0) {
                    foreach ($request->tag_id as  $value) {
                        $categoryBlogs = new BlogTag();
                        $categoryBlogs->blog_id = $projects->id;
                        $categoryBlogs->tag_id = $value['id'];
                        $categoryBlogs->created_at = Carbon::now();
                        $categoryBlogs->save();
                    }
                }
                // Save Multiple Images
                if ($request->secondary_images) {
                    foreach ($request->secondary_images as $value) {
                        if($value){
                            $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                            \Image::make($value)->save(public_path('images/blogs/').$secondaryImageName);
                        }else{
                            $secondaryImageName="profile.png";
                        }
                        $blogImages = new BlogSecondaryImage();
                        $blogImages->blog_id = $projects->id;
                        $blogImages->image = $secondaryImageName;
                        $blogImages->created_at = Carbon::now();
                        $blogImages->save();
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
        if(auth()->user()->can('edit_blog')){
            $projects = Blog::findOrfail($id);
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'blog_category_id'=>'required',
                'tag_id'=>'required',
                'featured_image'=>'required',
                'description'=>'required',
                'date_time'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']!=$projects->featured_image){
                $name=time().'.'.explode('/', explode(':', substr($request['featured_image'],0,strpos($request['featured_image'], ';')))[1])[1];
                $publicPath=public_path('images/blogs/'.$name);
                \Image::make($request['featured_image'])->save($publicPath);
                if((file_exists(public_path('images/blogs/'.$projects->featured_image)))&&($projects->featured_image!="profile.png")){
                    @unlink(public_path('images/blogs/'.$projects->featured_image));
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
            // Update Blog Developer
            if ($projects) {
                $blogArray = [];
                // update record in categoryBlogs table
                if(isset($request['blog_category_id']) && $request['blog_category_id'] != ''){
                    // create array for blog_category_id
                    foreach($request['blog_category_id'] as $blog_category_id){
                        $blogArray[] = $blog_category_id['id'];
                    }
                }
                //Sync the record into categoryBlogs
                $projects->updateCategoryBlogs()->sync($blogArray);
            }
            // Update Blog Tag
            if ($projects) {
                $tagArray = [];
                // update record in categoryBlogs table
                if(isset($request['tag_id']) && $request['tag_id'] != ''){
                    // create array for tag_id
                    foreach($request['tag_id'] as $tag_id){
                        $tagArray[] = $tag_id['id'];
                    }
                }
                //Sync the record into categoryBlogs
                $projects->updateBlogTags()->sync($tagArray);
            }
            // Save Multiple Images
            if ($request->secondary_images_copy) {
                foreach ($request->secondary_images_copy as $value) {
                    if($value){
                        $secondaryImageName=time().'.'.explode('/', explode(':', substr($value,0,strpos($value, ';')))[1])[1];
                        \Image::make($value)->save(public_path('images/blogs/').$secondaryImageName);
                    }else{
                        $secondaryImageName="profile.png";
                    }
                    $blogImages = new BlogSecondaryImage();
                    $blogImages->blog_id = $projects->id;
                    $blogImages->image = $secondaryImageName;
                    $blogImages->created_at = Carbon::now();
                    $blogImages->save();
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
        if(auth()->user()->can('delete_blog')){
            $projects = Blog::findOrfail($id);
            //Delete the blog
            if((file_exists(public_path('images/blogs/'.$projects->featured_image)))&&($projects->featured_image!="profile.png")){
                @unlink(public_path('images/blogs/'.$projects->featured_image));
            }
            $projects->deleteCategoryBlogs()->delete();
            $projects->deleteBlogTags()->delete();
            $projects->secondaryImages()->delete();
            $projects->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

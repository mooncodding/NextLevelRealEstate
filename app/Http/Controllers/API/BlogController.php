<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSecondaryImage;
use App\Models\BlogTag;
use App\Models\CategoryBlog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:blogs']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $blogs=Blog::with(['categoryBlogs','blogTags','secondaryImages','createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $blogs->where( 'title', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $blogs=$blogs->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $blogs=$blogs->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $blogs->paginate($request->numRows);
        }else{
            return $blogs->get();
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

            $blogs = new Blog();
            $blogs->title=$request->title;
            $blogs->featured_image=$name;
            $blogs->description = $request->description;
            $blogs->date_time = Carbon::parse($request->date_time)->toDateTimeString();
            $blogs->created_by = Auth::user()->id;
            $blogs->created_at = Carbon::now();
            $blogs->save();
            if ($blogs) {
                // Save Multiple Blog Categories
                if (count($request->blog_category_id) > 0) {
                    foreach ($request->blog_category_id as  $value) {
                        $categoryBlogs = new CategoryBlog();
                        $categoryBlogs->blog_id = $blogs->id;
                        $categoryBlogs->blog_category_id = $value['id'];
                        $categoryBlogs->created_at = Carbon::now();
                        $categoryBlogs->save();
                    }
                }
                // Save Multiple Blog Tags
                if (count($request->tag_id) > 0) {
                    foreach ($request->tag_id as  $value) {
                        $categoryBlogs = new BlogTag();
                        $categoryBlogs->blog_id = $blogs->id;
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
                        $blogImages->blog_id = $blogs->id;
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
            $blogs = Blog::findOrfail($id);
            $this->validate($request, [
                'title'=>'required|string|max:64',
                'blog_category_id'=>'required',
                'tag_id'=>'required',
                'featured_image'=>'required',
                'description'=>'required',
                'date_time'=>'required',
                'secondary_images'=>'nullable',
            ]);
            if($request['featured_image']!=$blogs->featured_image){
                $name=time().'.'.explode('/', explode(':', substr($request['featured_image'],0,strpos($request['featured_image'], ';')))[1])[1];
                $publicPath=public_path('images/blogs/'.$name);
                \Image::make($request['featured_image'])->save($publicPath);
                if((file_exists(public_path('images/blogs/'.$blogs->featured_image)))&&($blogs->featured_image!="profile.png")){
                    @unlink(public_path('images/blogs/'.$blogs->featured_image));
                }
                $request->merge(['featured_image'=>$name]);
            }else{
                $name= $blogs->featured_image;
            }
            if($request->date_time!=$blogs->date_time){
                $request->merge(['date_time'=>Carbon::parse($request['date_time'])->toDateTimeString()]);
            }
            $blogs->title=$request->title;
            $blogs->featured_image=$name;
            $blogs->description = $request->description;
            $blogs->date_time = Carbon::parse($request->date_time)->toDateTimeString();
            $blogs->updated_by = Auth::user()->id;
            $blogs->updated_at = Carbon::now();
            $blogs->save();
            // Update Blog Developer
            if ($blogs) {
                $blogArray = [];
                // update record in categoryBlogs table
                if(isset($request['blog_category_id']) && $request['blog_category_id'] != ''){
                    // create array for blog_category_id
                    foreach($request['blog_category_id'] as $blog_category_id){
                        $blogArray[] = $blog_category_id['id'];
                    }
                }
                //Sync the record into categoryBlogs
                $blogs->updateCategoryBlogs()->sync($blogArray);
            }
            // Update Blog Tag
            if ($blogs) {
                $tagArray = [];
                // update record in categoryBlogs table
                if(isset($request['tag_id']) && $request['tag_id'] != ''){
                    // create array for tag_id
                    foreach($request['tag_id'] as $tag_id){
                        $tagArray[] = $tag_id['id'];
                    }
                }
                //Sync the record into categoryBlogs
                $blogs->updateBlogTags()->sync($tagArray);
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
                    $blogImages->blog_id = $blogs->id;
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
            $blogs = Blog::findOrfail($id);
            //Delete the blog
            if((file_exists(public_path('images/blogs/'.$blogs->featured_image)))&&($blogs->featured_image!="profile.png")){
                @unlink(public_path('images/blogs/'.$blogs->featured_image));
            }
            $blogs->deleteCategoryBlogs()->delete();
            $blogs->deleteBlogTags()->delete();
            $blogs->secondaryImages()->delete();
            $blogs->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

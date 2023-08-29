<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCategoryController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'permission:blog_categories']);
    }
    
    public function index(Request $request)
    {
        //Declare a global variable with relation orders!
        $blogCategory=BlogCategory::with(['createdBy', 'updatedBy']);
        //Check if there is any search value
        if($request->search!=""){
            $blogCategory->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhereHas('createdBy', function($query) use ($request){
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        //Check in any type of sorting
        if($request->sortBy!=""){
            //If the sorting is not related to Relations
            if($request->sortBy != 'created_by.name'){
                $blogCategory=$blogCategory->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
            }
        }else{
            //Default Sorting
            $blogCategory=$blogCategory->orderBy("id", "desc");
        }
        //Pagination
        if(isset($request->numRows) && $request->numRows>0){
            return $blogCategory->paginate($request->numRows);
        }else{
            return $blogCategory->get();
        }
    }

    public function store(Request $request)
    {
        //
        if(auth()->user()->can('create_blog_category')){
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'description'=>'required',
            ]);

            $blogCategory = new BlogCategory();
            $blogCategory->name=$request->name;
            $blogCategory->description=$request->description;
            $blogCategory->created_by = Auth::user()->id;
            $blogCategory->created_at = Carbon::now();
            $blogCategory->save();
            return response()->json("Record created successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function update(Request $request, $id)
    {
        //
        if(auth()->user()->can('edit_blog_category')){
            $blogCategory = BlogCategory::findOrfail($id);
            $this->validate($request, [
                'name'=>'required|string|max:64',
                'description'=>'required',
            ]);
            
            $blogCategory->updated_by = Auth::user()->id;
            $blogCategory->updated_at = Carbon::now();
            $blogCategory->update($request->all());
            return response()->json("Record updated successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }

    public function destroy($id)
    {
        //
        if(auth()->user()->can('delete_blog_category')){
            $blogCategory = BlogCategory::findOrfail($id);
            $blogCategory->delete();
            return response()->json("Record deleted successfully", 200);
        }else{
            return response()->json("Unauthorized", 401);
        }
    }
}

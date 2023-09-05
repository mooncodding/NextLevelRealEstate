<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'blog_category_id',
        'tag_id',
        'featured_image',
        'description',
        'date_time',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];



    public function categoryBlogs(){
        return $this->hasManyThrough(BlogCategory::class, CategoryBlog::class,
        'blog_id', // Foreign key on the types table...
        'id', // Foreign key on the items table...
        'id', // Local key on the users table...
        'blog_category_id'); // Local key on the categories table...);
    }
    
    public function updateCategoryBlogs(){
        return $this->belongsToMany(BlogCategory::class,'category_blogs','blog_id','blog_category_id');
    }
    public function deleteCategoryBlogs(){
        return $this->hasMany(CategoryBlog::class,'blog_id');  
    }

    public function blogTags(){
        return $this->hasManyThrough(Tag::class, BlogTag::class,
        'blog_id', // Foreign key on the types table...
        'id', // Foreign key on the items table...
        'id', // Local key on the users table...
        'tag_id'); // Local key on the categories table...);
    }
    
    public function updateBlogTags(){
        return $this->belongsToMany(Tag::class,'blog_tags','blog_id','tag_id');
    }
    
    public function deleteBlogTags(){
        return $this->hasMany(BlogTag::class,'blog_id');  
    }

    public function secondaryImages(){
        return $this->hasMany(BlogSecondaryImage::class,'blog_id');  
    }
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');  
    }
    
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');  
    }
}

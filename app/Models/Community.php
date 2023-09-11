<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'communities';

    protected $fillable = [
        'name',
        'description',
        'featured_image',
        'area_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];



    public function communityProjects(){
        return $this->hasManyThrough(Project::class, CommunityProject::class,
        'community_id', // Foreign key on the types table...
        'id', // Foreign key on the items table...
        'id', // Local key on the users table...
        'project_id'); // Local key on the categories table...);
    }
    
    public function updateCommunityProjects(){
        return $this->belongsToMany(Project::class,'community_projects','community_id','project_id');
    }

    public function deleteCommunityProjects(){
        return $this->hasMany(CommunityProject::class,'community_id');  
    }

    public function secondaryImages(){
        return $this->hasMany(CommunitySecondaryImage::class,'community_id');  
    }
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');  
    }
    
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');  
    }

}

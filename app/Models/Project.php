<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'starting_price',
        'featured_image',
        'developer_id',
        'property_status_id',
        'date_time',
        'address',
        'latitude',
        'longitude',
        'description',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];



    public function projectTypes(){
        return $this->hasManyThrough(PropertyType::class, ProjectType::class,
        'project_id', // Foreign key on the types table...
        'id', // Foreign key on the items table...
        'id', // Local key on the users table...
        'property_type_id'); // Local key on the categories table...);
    }
    
    public function updateProjectTypes(){
        return $this->belongsToMany(PropertyType::class,'property_types','project_id','property_type_id');
    }

    public function deleteProjectTypes(){
        return $this->hasMany(ProjectType::class,'project_id');  
    }

    public function projectDocuments(){
        return $this->hasMany(ProjectDocument::class,'project_id');  
    }

    public function secondaryImages(){
        return $this->hasMany(ProjectSecondaryImage::class,'project_id');  
    }
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');  
    }
    
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');  
    }
}

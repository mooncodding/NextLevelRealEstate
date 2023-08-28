<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'areas';

    protected $fillable = [
        'title',
        'developer_id',
        'featured_image',
        'description',
        'latitude',
        'longitude',
        'starting_price',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];



    public function areaDevelopers(){
        return $this->hasManyThrough(Developer::class, AreaDeveloper::class,
        'area_id', // Foreign key on the types table...
        'id', // Foreign key on the items table...
        'id', // Local key on the users table...
        'developer_id'); // Local key on the categories table...);
    }
    
    public function areaDevelopersCopy(){
        return $this->hasMany(AreaDeveloper::class,'id');  
    }

    public function secondaryImages(){
        return $this->hasMany(AreaSecondaryImage::class,'area_id');  
    }
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');  
    }
    
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');  
    }
    
}

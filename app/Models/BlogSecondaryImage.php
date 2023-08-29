<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSecondaryImage extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';

    protected $table = 'blog_secondary_images';

    protected $fillable = [
        'blog_id',
        'image',
        'created_at',
        'updated_at',
    ];

    public function blog(){
        return $this->belongsTo(Area::class,'blog_id');  
    }
}

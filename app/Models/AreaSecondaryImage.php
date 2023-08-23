<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaSecondaryImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'area_secondary_images';

    protected $fillable = [
        'area_id',
        'image',
        'created_at',
        'updated_at',
    ];

    public function area(){
        return $this->belongsTo(Area::class,'area_id');  
    }
}

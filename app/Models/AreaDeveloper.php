<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaDeveloper extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'area_developers';

    protected $fillable = [
        'area_id',
        'developer_id',
        'created_at',
        'updated_at',
    ];

    // public function area(){
    //     return $this->belongsTo(Area::class,'area_id');  
    // }
}

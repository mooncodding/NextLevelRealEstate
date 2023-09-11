<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'project_types';

    protected $fillable = [
        'project_id',
        'property_type_id',
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocument extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'project_documents';

    protected $fillable = [
        'title',
        'file',
        'project_id',
        'created_at',
        'updated_at',
    ];
}

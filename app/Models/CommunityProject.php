<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityProject extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'community_projects';

    protected $fillable = [
        'community_id',
        'project_id',
        'created_at',
        'updated_at',
    ];
}

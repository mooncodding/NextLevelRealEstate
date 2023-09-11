<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunitySecondaryImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'community_secondary_images';

    protected $fillable = [
        'project_id',
        'image',
        'created_at',
        'updated_at',
    ];
}

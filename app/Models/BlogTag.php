<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'blog_tags';

    protected $fillable = [
        'blog_id',
        'tag_id',
        'created_at',
        'updated_at',
    ];
}

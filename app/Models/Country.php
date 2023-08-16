<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'state',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');  
    }
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');  
    }
}

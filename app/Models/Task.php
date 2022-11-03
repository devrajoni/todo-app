<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'user_id',
        'title',
        'description',
        'started_at',
        'status',
    ];

    protected $casts = [
        'started_at' => 'datetime:Y-m-d',
    ];
 
}

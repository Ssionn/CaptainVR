<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'profession',
        'location',
        'phone',
        'email',
    ];
    protected $casts = [
        'created_at',
        'updated_at',
    ];
}

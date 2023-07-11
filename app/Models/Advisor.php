<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'name',
        'title',
        'fb_link',
        'youtube_link',
        'linkdin_link',
    ];
}

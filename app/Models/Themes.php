<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;

    protected $fillable = [       
        'theme',
        'theme_path',
        'theme_path_edit',
        'theme_picture',
    ];
}

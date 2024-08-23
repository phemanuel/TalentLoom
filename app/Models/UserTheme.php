<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTheme extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'theme',
        'theme_path',
        'theme_path_edit',
    ];
}

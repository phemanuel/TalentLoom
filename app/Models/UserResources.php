<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResources extends Model
{
    use HasFactory;

    // protected $table = 'resources';

    protected $fillable = [
        'title',
        'description',
        'resource_type',
        'file_path',
        'url',
        'thumbnail',
        'author',
        'skill_set',
        'tags',
        'access_level',
        'views_count',
        'downloads_count',
        'is_active',
        'uploaded_by',
        'file_size',
        'license_type',
    ];
}

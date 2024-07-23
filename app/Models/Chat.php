<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'ch_messages';
    protected $fillable = [
        'to_id',
        'from_id',
        'seen',
        'body',
        'attachment',
    ];
}

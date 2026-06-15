<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    protected $fillable = [
        'title',
        'description',
        'audio_url',
        'duration'
    ];
}

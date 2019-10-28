<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
		public $timestamps = false;
    protected $fillable = [
        'name' ,'song_path', 'image_path',
    ];
}

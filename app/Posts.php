<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //

    protected $table = 'post'; //nama table di db

    //nama colom di db
    protected $fillable = [
    	'gambar',
    	'penulis',
    	'slug',
    	'judul',
    	'isi',
    	'status'
    ];
}

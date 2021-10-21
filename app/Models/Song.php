<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Song extends Model
{

    protected $fillable = ['name', 'creator', 'genre_id', 'length'];



    protected $table = 'songs';


}

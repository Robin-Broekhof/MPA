<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Song extends Model
{

    protected $fillable = ['name', 'creator', 'genre_id', 'user_id', 'length'];



    protected $table = 'songs';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class);
    }

}

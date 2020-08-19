<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_name',
        'artist_id'
    ];

    public function songs() {
        return $this->hasMany("App\Song");
    }
}

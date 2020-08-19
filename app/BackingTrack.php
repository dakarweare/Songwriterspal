<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackingTrack extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'backing_track_name'
    ];
}

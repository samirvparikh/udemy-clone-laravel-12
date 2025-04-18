<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['playlist_id', 'title', 'video_path'];
    
    public function playlist() {
        return $this->belongsTo(Playlist::class);
    }
}

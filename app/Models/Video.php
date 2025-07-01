<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['coach_id', 'title', 'video_url', 'duration'];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    // If tracking views
    public function views()
    {
        return $this->hasMany(VideoView::class);
    }
}
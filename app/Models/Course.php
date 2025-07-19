<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description','course_url','coach_id','video_url'];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

}

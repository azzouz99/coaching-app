<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description','course_url','coach_id','video_url','type'];

    protected $casts = [
        'type' => 'string',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function scopeZaytouna($query)
    {
        return $query->where('type', 'zaytouna');
    }

    public function isZaytouna(): bool
    {
        return $this->type === 'zaytouna';
    }

}

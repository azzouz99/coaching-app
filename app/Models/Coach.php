<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['name', 'description', 'photo', 'specialties'];
    
    protected $casts = [
        'specialties' => 'array',
    ];
    
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

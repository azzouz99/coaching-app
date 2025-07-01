<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['name', 'description'];
    
    public function video()
    {
        return $this->hasOne(Video::class);
    }
}

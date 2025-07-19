<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Coach;
use App\Models\Course;

class StatsCards extends Component
{
    public function render()
    {
        $coaches = Coach::all();
        $courses = Course::all();
        
        return view('livewire.stats-cards', [
            'totalCoaches' => $coaches->count(),
            'videosAvailable' => $courses->whereNotNull('video_url')->count(),
            'activePrograms' => $courses->whereNotNull('course_url')->count(),
        ]);
    }
}

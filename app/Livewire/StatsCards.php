<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Coach;

class StatsCards extends Component
{
    public function render()
    {
        $coaches = Coach::all();
        
        return view('livewire.stats-cards', [
            'totalCoaches' => $coaches->count(),
            'videosAvailable' => $coaches->whereNotNull('video')->count(),
            'activePrograms' => $coaches->count(),
        ]);
    }
}

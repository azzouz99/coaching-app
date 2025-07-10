<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Coach;

class CoachesGrid extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 9;

    protected $paginationTheme = 'tailwind';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $coaches = Coach::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);

        return view('livewire.coaches-grid', compact('coaches'));
    }
}

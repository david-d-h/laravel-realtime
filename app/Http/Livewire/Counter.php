<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CounterController;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    protected $listeners = [
        'echo:counter.updated,CounterUpdated' => 'updateCounter',
    ];

    public function mount()
    {
        $this->count = CounterController::getCount();
    }

    public function increment()
    {
        $this->count++;
        CounterController::increment();
    }

    public function updateCounter($payload)
    {
        $this->count = $payload['count'] ?? $this->count;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

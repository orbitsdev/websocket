<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{

    public $count = 0;

    protected $listeners = ['incrementCounter' => 'increment'];

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter-component');
    }
}

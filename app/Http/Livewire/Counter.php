<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        sleep(1);
        $this->count++;
    }

    public function decrement()
    {
        sleep(1);
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

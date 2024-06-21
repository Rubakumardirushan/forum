<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $dirushan='Dirushan';
    public function render()
    {
        return view('livewire.main');
    }
    public function store()
    {
        $this->dirushan='mass';
    }
}

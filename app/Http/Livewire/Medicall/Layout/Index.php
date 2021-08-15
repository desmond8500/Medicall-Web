<?php

namespace App\Http\Livewire\Medicall\Layout;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.medicall.layout.index')->extends('livewire.medicall.layout.layout')->section('content');
    }
}

<?php

namespace App\Http\Livewire\Medicall\Pages;

use Livewire\Component;

class MedicPage extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.medic-page')->extends('0 tiny.layout')->section('content');;
    }
}

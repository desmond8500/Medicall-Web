<?php

namespace App\Http\Livewire\Tiny\User;

use Livewire\Component;

class Dossier extends Component
{
    public function render()
    {
        return view('livewire.tiny.user.dossier')->extends('0 tiny.layout')->section('content');;
    }
}

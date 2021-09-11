<?php

namespace App\Http\Livewire\Tiny\User;

use Livewire\Component;

class Traitement extends Component
{
    public function render()
    {
        return view('livewire.tiny.user.traitement')->extends('0 tiny.layout')->section('content');
    }
}

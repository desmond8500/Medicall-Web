<?php

namespace App\Http\Livewire\Tiny\User;

use Livewire\Component;

class Rendezvous extends Component
{
    public function render()
    {
        return view('livewire.tiny.user.rendezvous')->extends('0 tiny.layout')->section('content');;
    }
}

<?php

namespace App\Http\Livewire\Tiny\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.tiny.user.profile',[
            'user'=> Auth::user(),
        ])->extends('0 tiny.layout')->section('content');
    }
}

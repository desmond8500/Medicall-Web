<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.users',[
            'users' => User::all(),
        ])->extends('0 bootstrap5.layout.layout')->section('content');
    }
}

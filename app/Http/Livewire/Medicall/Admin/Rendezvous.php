<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Rv;
use Livewire\Component;

class Rendezvous extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.rendezvous',[
            'rvs' => Rv::all(),
        ])->extends('0 bootstrap5.layout.layout')->section('content');
    }
}

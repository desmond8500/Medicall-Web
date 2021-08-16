<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Newsletter as ModelsNewsletter;
use Livewire\Component;

class Newsletter extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.newsletter',[
            'news' => ModelsNewsletter::all(),
        ])->extends('0 bootstrap5.layout.layout')->section('content');
    }
}

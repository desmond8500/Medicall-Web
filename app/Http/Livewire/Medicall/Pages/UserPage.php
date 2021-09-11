<?php

namespace App\Http\Livewire\Medicall\Pages;

use Livewire\Component;

class UserPage extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.user-page')->extends('0 tiny.layout')->section('content');
    }
}

<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Newsletter;
use App\Models\Rv;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.index',[
            'news' => Newsletter::count(),
            'rvs' => Rv::count(),
            'users' => User::count(),
        ])->extends('0 bootstrap5.layout.layout')->section('content');
    }

}

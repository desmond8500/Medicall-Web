<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Newsletter;
use App\Models\Rv;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.index',[
            'news' => Newsletter::all(),
            'rvs' => Rv::all(),
        ])->extends('livewire.medicall.layout.layout')->section('content');
    }


}

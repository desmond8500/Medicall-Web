<?php

namespace App\Http\Livewire\Tiny\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public function render()
    {
        return view('livewire.tiny.admin.nav', [
            'user' => Auth::user(),
        ]);
    }
}

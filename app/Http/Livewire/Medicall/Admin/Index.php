<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Newsletter;
use App\Models\Rv;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function mount()
    {
        $user = Auth::user();

        if ($user->role == 'user') {
            return redirect()->route('user.index');
        } elseif ($user->role == 'medic') {
            return redirect()->route('medic.index');
        }
    }

    public function render()
    {
        return view('livewire.medicall.admin.index',[
            'news' => Newsletter::count(),
            'rvs' => Rv::count(),
            'users' => User::count(),
        ])->extends('0 tiny.layout')->section('content');

    }

}

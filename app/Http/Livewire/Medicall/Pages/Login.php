<?php

namespace App\Http\Livewire\Medicall\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.login')->extends('livewire.medicall.layout.layout')->section('content');
    }

    public $email, $password;

    // protected $rules = [
    //     'email' => 'required',
    //     'password' => 'required'
    // ];

    // protected $messages = [
    //     'email.required' => "Ce champ est requis",
    //     'email.email' => "Le format du mail n'est pas respecté",
    //     'password.required' => "Ce champ est requis",
    // ];

    public function login()
    {
        // $this->validate();


        $login = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($login) {
            $user = Auth::user();
            if ($user->role == "user") {
                return redirect()->route('user.index');
            } else if ($user->role == "medic") {
                return redirect()->route('medic.index');
            } else if ($user->role == "admin") {
                return redirect()->route('admin.index');
            }
        }else {
            session()->flash('error', 'Les identifiants saisis sont incorrects');
        }

    }

    public function autologin($role)
    {
        $this->email = "$role@medicall.com";
        $this->password = "passer";
    }
}

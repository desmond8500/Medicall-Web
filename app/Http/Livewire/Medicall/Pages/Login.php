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

    public function login()
    {
        $this->validate();
        // dump('sfsd');

        //$login = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        // if ($login) {
        //     dd($login);
        // }
    }
}

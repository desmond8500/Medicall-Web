<?php

namespace App\Http\Livewire\Medicall\Pages;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.register')->extends('livewire.medicall.layout.layout')->section('content');;
    }

    public $data = 'hello';

    public $prenom, $nom, $tel, $email, $pass1, $pass2;

    // protected $rules = [
    //     'prenom' => 'required',
    //     'nom' => 'required',
    //     'tel' => 'required',
    //     'email' => 'required',
    //     'password' => 'required',
    // ];

    public function registering()
    {
        // $this->validate();
        dd('hello');

        User::create([
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'tel' => $this->tel,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}

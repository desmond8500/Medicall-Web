<?php

namespace App\Http\Livewire\Medicall\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.register')->extends('livewire.medicall.layout.layout')->section('content');;
    }

    public $data = 'hello';

    public $prenom, $nom, $tel, $email, $pass1, $pass2;
    public $pass_message = 0;

    protected $rules = [
        'prenom' => 'required',
        'nom' => 'required',
        'tel' => 'required',
        'email' => 'required',
        'pass1' => 'required',
    ];

    protected $messages = [
        'prenom.required' => 'Ce champ est requis',
        'nom.required' => 'Ce champ est requis',
        'tel.required' => 'Ce champ est requis',
        'tel.tel' => 'Ce champ est requis',
        'email.required' => 'Ce champ est requis',
        'email.email' => 'Le format du mail n\'est pas valide',
        'pass1.required' => 'Ce champ est requis',
    ];

    public function register()
    {
        $this->validate();

        if ($this->pass1 == $this->pass2) {
            $user = User::create([
                'prenom' => $this->prenom,
                'nom' => $this->nom,
                'tel' => $this->tel,
                'email' => $this->email,
                'password' => Hash::make($this->pass1),
            ]);

            \Canvas\Models\User::create([
                'id' => $user->id,
                'name' => $user->nom,
                'email' => $user->email,
                'username' => $user->prenom,
                'password' => $user->password,
                'role' => '3',
                'locale' => 'fr',
            ]);
        } else {
            $this->pass_message = "Les mots de passe ne correspondent pas";
        }

        session()->flash('message', 'Votre compte a été créé');

        $this->reset('prenom', 'nom', 'tel', 'email', 'pass1');

        return redirect()->route('login');
    }
}

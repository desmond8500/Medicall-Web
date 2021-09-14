<?php

namespace App\Http\Livewire\Tiny\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }
    public function render()
    {
        return view('livewire.tiny.user.profile',[
            'user'=> $this->user,
        ])->extends('0 tiny.layout')->section('content');
    }

    public $info_form = 0;

    public $prenom, $nom, $email, $adresse, $tel;

    public function edit()
    {
        $this->info_form = 1;
        $user = Auth::user();

        $this->prenom   = $user->prenom;
        $this->nom      = $user->nom;
        $this->email    = $user->email;
        $this->tel      = $user->tel;
    }
    public function update()
    {
        $user = Auth::user();

        $user->prenom   = $this->prenom;
        $user->nom      = $this->nom;
        $user->email    = $this->email;
        $user->tel      = $this->tel;

        $user->save();

        $this->user = $user;

        $this->reset('info_form');
    }

    // Mot de passe

    public $pass1, $pass2, $pass3;
}

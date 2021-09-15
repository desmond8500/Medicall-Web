<?php

namespace App\Http\Livewire\Tiny\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public function mount()
    {
        $this->edit();
        $this->info_form = 0;
    }
    public function render()
    {
        return view('livewire.tiny.user.profile',[
            'user'=> Auth::user(),
        ])->extends('0 tiny.layout')->section('content');
    }

    public $info_form = 0;

    public $prenom, $nom, $email, $adresse, $tel, $avatar;
    public $description, $fonction;

    public function edit()
    {
        $this->info_form = 1;
        $this->edit_pass = 0;
        $user = Auth::user();

        $this->prenom   = $user->prenom;
        $this->nom      = $user->nom;
        $this->email    = $user->email;
        $this->tel      = $user->tel;
        $this->adresse  = $user->adresse;
        $this->fonction  = $user->fonction;
        $this->description  = $user->description;
    }
    public $edit_pass = 0, $pass;
    public function edit_password()
    {
        $this->edit_pass = 1;
        $this->info_form = 0;
        $user = Auth::user();

        $this->pass   = $user->password;
    }


    public function update()
    {
        $user = Auth::user();

        $user->prenom   = $this->prenom;
        $user->nom      = $this->nom;
        $user->email    = $this->email;
        $user->tel      = $this->tel;
        $user->adresse  = $this->adresse;
        $user->description  = $this->description;
        $user->fonction  = $this->fonction;

        $user->save();

        $this->user = $user;

        $this->reset('info_form');
        return redirect()->route('user.profile');
    }
    public $edit_avatar = 0;
    public function update_avatar()
    {
        $user = Auth::user();

        if ($this->avatar) {
            $dir = "User/$user->id/avatar";
            Storage::disk('public')->deleteDirectory($dir);
            $name = $this->avatar->getClientOriginalName();
            $this->avatar->storeAs("public/$dir", $name);

            $user->avatar = "$dir/$name";
            $user->save();
        }

        $this->reset('edit_avatar');
    }

    // Mot de passe

    public $pass1, $pass2, $pass3;
}

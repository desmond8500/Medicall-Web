<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\MedicFonction;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.users',[
            'users' => User::all(),
            'fonctions' => MedicFonction::all(),
        ])->extends('0 tiny.layout')->section('content');
    }

    public $user_form=0, $user_id=0;
    public $prenom, $nom, $email, $role;

    public function edit($id)
    {
        $this->user_id = $id;
        $user = User::find($id);
        $this->prenom = $user->prenom;
        $this->nom = $user->nom;
        $this->email = $user->email;
        $this->role = $user->role;
    }
    public function update()
    {
        $user = User::find($this->user_id);
        $user->prenom = $this->prenom;
        $user->nom = $this->nom;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->save();

        $this->reset('user_id', 'user_form');
    }
    public function delete(){
        $user = User::find($this->user_id);
        $user->delete();
    }

    public $a=0;
    public function update_role()
    {
        $user = User::find($this->user_id);
        $user->role = $this->role;
        $user->save();
        $this->reset('user_id');
    }

    // Blog
    public function blog($user_id)
    {
        $user = User::find($user_id);

        \Canvas\Models\User::create([
            'id' => $user->id,
            'name' => $user->nom,
            'email' => $user->email,
            'username' => $user->prenom,
            'password' => $user->password,
            'role' => '1',
            'locale' => 'fr',
        ]);
    }

    // Fonction

    public $name, $description, $fonction_form = 0;

    public function store_fonction()
    {
        MedicFonction::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->reset('name', 'description');
    }
    public function edit_fonction($id)
    {
        $this->function_id = $id;
        $function = MedicFonction::find($id);
        $this->name = $function->name;
        $this->description = $function->description;
    }
    public function update_fonction()
    {
        $function = MedicFonction::find($this->function_id);
        $function->name = $this->name;
        $function->description = $this->description;

        $function->save();

        $this->reset('function_id');
    }
    public function delete_fonction(){
        $function = MedicFonction::find($this->function_id);
        $function->delete();
    }
}

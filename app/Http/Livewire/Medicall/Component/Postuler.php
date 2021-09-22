<?php

namespace App\Http\Livewire\Medicall\Component;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Postuler extends Component
{
    public function render()
    {
        return view('livewire.medicall.component.postuler');
    }

    public $prenom, $nom, $tel, $email, $pass1, $pass2;
    public $pass_message = 0;

    public function register()
    {

        if ($this->pass1 == $this->pass2 && $this->pass1!=null) {
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
                'role' => '1',
                'locale' => 'fr',
            ]);

            session()->flash('message', 'Votre compte a été créé');

            $this->reset('prenom', 'nom', 'tel', 'email', 'pass1');

            return redirect()->route('login');
        } else {
            session()->flash('pass_error', 'Les mots de passe ne correspondent pas');
        }


    }
}

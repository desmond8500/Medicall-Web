<?php

namespace App\Http\Livewire\Medicall\Layout;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.medicall.layout.navbar',[
            'menus' => $this->get_menus(),
            'users' => User::count(),
        ]);
    }

    public function get_menus(){
        return (Object) array(
            // (Object) array("name"=> "Accueil", "route"=>"index", "role" => null),
            (Object) array("name"=> "Admin", "route"=>"admin.index", "role"=> 'admin'),
            (Object) array("name"=> "Tableau de bord", "route"=>"medic.index", "role"=> 'medic'),
            (Object) array("name"=> "Tableau de bord", "route"=>"user.index", "role"=> 'user'),
        );
    }

    public function init(){
        if (!User::count()) {
            User::create([
                'prenom' => 'admin',
                'nom' => 'admin',
                'tel' => '0000',
                'role' => 'admin',
                'email' => 'admin@medicall.com',
                'password' => Hash::make('passer'),
            ]);
            User::create([
                'prenom' => 'medic',
                'nom' => 'medic',
                'tel' => '1111',
                'role' => 'medic',
                'email' => 'medic@medicall.com',
                'password' => Hash::make('passer'),
            ]);
            User::create([
                'prenom' => 'user',
                'nom' => 'user',
                'tel' => '3333',
                'role' => 'user',
                'email' => 'user@medicall.com',
                'password' => Hash::make('passer'),
            ]);
        }
    }


}

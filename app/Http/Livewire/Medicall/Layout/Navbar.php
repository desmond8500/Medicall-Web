<?php

namespace App\Http\Livewire\Medicall\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.medicall.layout.navbar',[
            'menus' => $this->get_menus()
        ]);
    }

    public function get_menus(){
        return (Object) array(
            (Object) array("name"=> "Accueil", "route"=>"index"),
            (Object) array("name"=> "Admin", "route"=>"admin.index"),
        );
    }


}

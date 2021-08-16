<?php

namespace App\Http\Livewire\Medicall\Component;

use Livewire\Component;

class AdminNav extends Component
{
    public function render()
    {
        return view('livewire.medicall.component.admin-nav',[
            'menus' => $this->get_menu(),
        ]);
    }

    public function get_menu()
    {
        return (Object) array(
            // (Object) array('name'=> 'Medicall', 'route'=> 'index'),
            (Object) array('name'=> 'Newsletter', 'route'=> 'admin.newsletter'),
            (Object) array('name'=> 'Rendez-vous', 'route'=> 'admin.rv'),
        );
    }
}

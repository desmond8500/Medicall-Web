<?php

namespace App\Http\Livewire\Tiny\Admin;

use App\Models\Newsletter;
use App\Models\Rv;
use App\Models\User;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.tiny.admin.sidebar', [
            'menus' => $this->get_menu(),
        ]);
    }
    public function get_menu()
    {
        return (object) array(
            // (Object) array('name'=> 'Medicall', 'route'=> 'index'),
            (object) array('name' => 'Newsletter', 'route' => 'admin.newsletter', 'count'=> Newsletter::count()),
            (object) array('name' => 'Rendez-vous', 'route' =>'admin.rv', 'count' => Rv::count()),
            (object) array('name' => 'Utilisateurs', 'route' =>'admin.users', 'count' => User::count()),
        );
    }
}

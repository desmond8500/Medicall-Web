<?php

namespace App\Http\Livewire\Tiny\Admin;

use App\Models\Newsletter;
use App\Models\Rv;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.tiny.admin.sidebar', [
            'menus' => $this->get_menu(Auth::user()->role),
        ]);
    }
    public function get_menu($role)
    {
        if ($role =='admin') {
            return $this->admin_menu();
        } elseif ($role == 'medic') {
            return $this->medic_menu();
        } else {
            return $this->user_menu();
        }
    }

    public function user_menu()
    {
        return (object) array(
            (object) array('name' => 'Accueil',         'route' => 'user.index', 'count' => ''),
            (object) array('name' => 'Dossier Medical', 'route' => 'user.dossier', 'count' => ''),
            (object) array('name' => 'Rendez-vous',     'route' => 'user.rv', 'count' => ''),
            (object) array('name' => 'Traitements',     'route' => 'user.traitement', 'count' => ''),
        );
    }
    public function medic_menu()
    {
        return (object) array(
            (object) array('name' => 'Accueil',             'route' => 'medic.index', 'count' => ''),
            (object) array('name' => 'Nouvelles demandes',  'route' => 'medic.index', 'count' => ''),
            (object) array('name' => 'Rendez-vous',         'route' => 'medic.index', 'count' => ''),
            (object) array('name' => 'Agenda',              'route' => 'medic.index', 'count' => ''),
            (object) array('name' => 'Patients',            'route' => 'medic.index', 'count' => ''),
        );
    }
    public function admin_menu()
    {
        return (object) array(
            // (Object) array('name'=> 'Medicall', 'route'=> 'index'),
            (object) array('name' => 'Newsletter',      'route' => 'admin.newsletter',  'count' => Newsletter::count()),
            (object) array('name' => 'Rendez-vous',     'route' => 'admin.rv',          'count' => Rv::count()),
            (object) array('name' => 'Utilisateurs',    'route' => 'admin.users',       'count' => User::count()),
            (object) array('name' => 'Blog',            'route' => 'canvas',            'count' => ''),
        );
    }
}

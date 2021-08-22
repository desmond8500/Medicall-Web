<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicallController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public static function get_role($role)
    {
        if ($role == 'admin') {
            return 'Administrateur';
        } elseif ($role == 'medic') {
            return 'Personnel';
        } else {
            return 'Client';
        }
    }
}

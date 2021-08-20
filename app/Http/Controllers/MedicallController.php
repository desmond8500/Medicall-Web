<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicallController extends Controller
{
    public function logout()
    {
        Auth::logout();
    }
}

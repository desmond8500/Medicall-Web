<?php

namespace App\Http\Livewire\Medicall\Pages;

use App\Models\ContactMessage;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.contact')->extends('livewire.medicall.layout.layout')->section('content');
    }

    public $nom, $email, $objet, $message;

    public function store()
    {
        ContactMessage::create([
            'name' => $this->nom,
            'email' => $this->email,
            'objet' => $this->objet,
            'message' => $this->message,
        ]);
    }
}

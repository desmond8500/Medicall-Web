<?php

namespace App\Http\Livewire\Medicall\Component;

use App\Models\Rv as ModelsRv;
use Livewire\Component;

class Rv extends Component
{
    public function render()
    {
        return view('livewire.medicall.component.rv');
    }
    public $name, $email, $tel, $needs = 1, $description, $status;

    // protected $rules = [
    //     'name' => 'required',
    //     'email' => 'required',
    //     'tel' => 'required',
    //     'description' => 'required',
    //     'description' => 'required',
    // ];

    // protected $messages = [
    //     'name.required' => 'Ce champ est requis',
    //     'email.required' => 'Ce champ est requis',
    //     'email.email' => 'Le format du mail est incorrect',
    //     'tel.required' => 'Ce champ est requis',
    //     'description.required' => 'Ce champ est requis',
    // ];

    public function rendez_vous()
    {
        // $this->validate();

        ModelsRv::create([
            'name' => $this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'needs' => $this->needs,
            'description' => $this->description,
            'status' => "new",
        ]);

        $this->reset('name', 'email', 'tel', 'needs', 'description', 'status');

        session()->flash('message', 'Votre demande de rendez vous a été enregistrée.');
    }
}

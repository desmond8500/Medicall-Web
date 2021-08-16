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
    public $name = "hello", $email, $tel, $needs = 1, $description, $status;

    // protected $rules = [
    //     'name' => 'required',
    //     'email' => 'email',
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
    }
}

<?php

namespace App\Http\Livewire\Medicall\Layout;

use App\Models\Newsletter;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.medicall.layout.footer');
    }

    // Newsletter
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function register_news()
    {
        $this->validate();

        Newsletter::create([
            'email' => $this->email
        ]);
        $this->reset('email');

        session()->flash('message', 'Votre inscription a été prise en compte.');
    }
}

<?php

namespace App\Http\Livewire\Medicall\Admin;

use App\Models\Rv;
use Livewire\Component;

class Rendezvous extends Component
{
    public function render()
    {
        return view('livewire.medicall.admin.rendezvous',[
            'rvs' => Rv::all(),
        ])->extends('0 tiny.layout')->section('content');
    }

    public $rv_id=0, $status;

    public function edit_status($id)
    {
        $this->rv_id = $id;
        $rv = Rv::find($id);
        $this->status = $rv->status;
    }

    public function update()
    {
        $rv = Rv::find($this->rv_id);
        $rv->status = $this->status;

        $rv->save();

        $this->reset('rv_id');
    }
    public function delete(){
        $rv = Rv::find($this->rv_id);
        $rv->delete();
    }

    public function test($item)
    {
        return 'hello';
    }


}

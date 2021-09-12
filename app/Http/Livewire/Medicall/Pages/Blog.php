<?php

namespace App\Http\Livewire\Medicall\Pages;

use Livewire\Component;

class Blog extends Component
{
    public $blog;

    public function mount($article_id)
    {
        $this->blog = \Canvas\Models\Post::find( $article_id);
    }
    public function render()
    {
        return view('livewire.medicall.pages.blog',[
            'post' =>  $this->blog,
            'topics' => \Canvas\Models\Topic::all(),
        ])->extends('livewire.medicall.layout.layout')->section('content');;
    }
}

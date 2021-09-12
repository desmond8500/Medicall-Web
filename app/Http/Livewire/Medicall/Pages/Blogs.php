<?php

namespace App\Http\Livewire\Medicall\Pages;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
        return view('livewire.medicall.pages.blogs',[
            'posts' => $this->getPosts($this->topic_id),
            'topics' => \Canvas\Models\Topic::all(),

        ])->extends('livewire.medicall.layout.layout')->section('content');
    }

    public $topic_id = 0;
    public function getPosts($topic_id)
    {
        if ($topic_id == 0) {
            return \Canvas\Models\Post::published()->orderByDesc('published_at')->paginate(6);
        }
        else {
            return \Canvas\Models\Topic::find($topic_id)->with('post');
        }
    }
}

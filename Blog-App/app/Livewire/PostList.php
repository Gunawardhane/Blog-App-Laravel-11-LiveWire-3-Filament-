<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PostList extends Component
{

    #[Computed]
    public function posts(){
        return Post::take(5)->get();
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}

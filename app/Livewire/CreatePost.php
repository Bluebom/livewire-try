<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{ 
    public PostForm $form;

    public function save()
    {
        $this->validate();

        Post::create(
            $this->form->only(['title', 'content'])
        );
 
        session()->flash('status', 'Post successfully updated.');
 
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

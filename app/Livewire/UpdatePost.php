<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Js;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UpdatePost extends Component
{
    public Post $post;
    public PostForm $form;
    public bool $sortAsc = false;
    public int $quantity = 0;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->form->title = $post->title;
        $this->form->content = $post->content;
    }

    public function update()
    {
        $this->validate();

        $this->post->update([
            'title' => $this->form->title,
            'content' => $this->form->content,
        ]);

        session()->flash('message', 'Post updated successfully!');

        $this->js("alert('Post saved!')"); 
    }

    public function getPostCount()
    {
        return Post::count();
    }

    #[Js] 
    public function resetQuery()
    {
        return <<<'JS'
            $wire.form.title = '';
        JS;
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}

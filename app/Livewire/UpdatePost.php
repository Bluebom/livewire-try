<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Js;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UpdatePost extends Component
{
    public int $postId;
    public PostForm $form;
    public bool $sortAsc = false;
    public int $quantity = 0;

    #[Computed(cache: true)]
    public function post(): Post
    {
        return Post::find($this->postId);
    }

    public function mount(int $postId)
    {
        $this->postId = $postId;
        $this->form->title = $this->post->title;
        $this->form->content = $this->post->content;
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
        unset($this->post);
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

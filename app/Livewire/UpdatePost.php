<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Js;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UpdatePost extends Component
{
    public Post $post;
    public $title;
    public $content;
    public bool $sortAsc = false;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:6',
            'content' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'title.min' => 'O título deve ter pelo menos 6 caracteres.',
        ];
    }

    public function update()
    {
        $this->validate();

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
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
            $wire.title = '';
        JS;
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}

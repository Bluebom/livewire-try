<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UpdatePost extends Component
{
    #[Locked]
    public $id;
    public $title;
    public $content;

    public function mount(Post $post)
    {
        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
    }
 
    public function update()
    {
        $post = Post::query()->findOrFail($this->id);

        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
 
        session()->flash('message', 'Post updated successfully!');
    }
 
    public function render()
    {
        return view('livewire.update-post');
    }
}

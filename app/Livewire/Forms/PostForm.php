<?php
 
namespace App\Livewire\Forms;
 
use Livewire\Attributes\Validate;
use Livewire\Form;
 
class PostForm extends Form
{
    #[Validate(['required', 'min:5'])]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'title.min' => 'O título deve ter pelo menos 5 caracteres.',
            'content.required' => 'O campo conteúdo é obrigatório.',
        ];
    }
}
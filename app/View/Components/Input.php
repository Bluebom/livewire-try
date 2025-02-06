<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public ?string $name;
    public ?string $type;
    public ?string $placeholder;
    public ?string $value;
    public ?string $label;
    public ?string $id;

    public function __construct(?string $name, ?string $type, ?string $placeholder, ?string $value, ?string $label, ?string $id)
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->label = $label;
        $this->id = $id;
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

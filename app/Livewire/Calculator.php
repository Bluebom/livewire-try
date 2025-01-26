<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Calculator extends Component
{
    public $math;
    public $result = 0;

    protected function rules() 
    {
        return [
            'math' => ['required'],
        ];
    }
 
    protected function messages() 
    {
        return [
            'math.required' => 'Por favor, insira uma operação matemática.',
        ];
    }

    public function render()
    {
        return view('livewire.calculator', [
            'user' => User::factory()->create()
        ]);
    }

    public function addMath($operator) {
        $this->math .= sprintf(($this->operatorSpace($operator) ? ' %s ': '%s'), $operator);
    }

    public function operation($operator) {
        $this->validate();

        if($operator == '=') {
            $this->result = number_format(eval('return ' . $this->math . ';'), 2, ',', '.');
        } else {
            $this->math .= $operator;
        }
    }

    public function clear() 
    {
        $this->math = '';
        $this->result = 0;
    }

    public function operatorSpace($operator) {
        return match($operator) {
            '+' => true,
            '-' => true,
            '*' => true,
            '/' => true,
            '(' => true,
            ')' => true,
            default => false,
        };
    }
}
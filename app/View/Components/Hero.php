<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public $states;
    public $categories;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->states = [
            ['value' => 'PR', 'name' => 'PARANÁ'],
            ['value' => 'MT', 'name' => 'MATO GROSSO'],
            ['value' => 'MS', 'name' => 'MATO GROSSO DO SUL'],
        ];

        $this->categories = [
            ['value' => '1', 'name' => 'Categoria 1'],
            ['value' => '2', 'name' => 'Categoria 2'],
            ['value' => '3', 'name' => 'Categoria 3'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}

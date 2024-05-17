<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{
    public $advertiseList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->advertiseList = [
            ['bgImage' => 'http://placehold.it/140x150', 'title' => 'Bola de Futebol Americano Wilson', 'price' => '189.99', 'href' => '1'],
            ['bgImage' => 'http://placehold.it/150x150', 'title' => 'Bola de Futebol Americano Wilson', 'price' => '189.99', 'href' => '2'],
            ['bgImage' => 'http://placehold.it/160x150', 'title' => 'Bola de Futebol Americano Wilson', 'price' => '189.99', 'href' => '3']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}

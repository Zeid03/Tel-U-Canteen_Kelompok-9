<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Favorites extends Component
{
    /**
     * Create a new component instance.
     */
    public $color;
    public $title;
    public $image;

    public function __construct($color = 'green', $title="Tahu Taylor", $image="")
    {
        $this->color = $color;
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.favorites');
    }
}

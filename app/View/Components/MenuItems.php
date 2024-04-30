<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItems extends Component
{
    /**
     * Create a new component instance.
     */
    public $jumlah;
    public $title;
    public $desc;
    public $image;

    public function __construct($jumlah = '1', $title="Tahu Taylor", $image="", $desc="")
    {
        $this->jumlah = $jumlah;
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-items');
    }
}

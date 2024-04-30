<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OutletItems extends Component
{
    /**
     * Create a new component instance.
     */

    public $gate;
    public $title;
    public $desc;
    public $harga;
    public $image;

    public function __construct($gate = 'Gate 1', $title="Tahu Taylor", $image="", $desc="", $harga="")
    {
        $this->gate = $gate;
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
        $this->harga = $harga;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.outlet-items');
    }
}

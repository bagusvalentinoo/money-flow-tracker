<?php

namespace App\View\Components\Base\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Get the view / contents that represent the component.
     * 
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.base.button.button');
    }
}

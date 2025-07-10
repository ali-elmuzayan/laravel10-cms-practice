<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title = 'About Us', public string $subtitle = '')
    {
        $this->subtitle = $subtitle ? $subtitle : $this->title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-section', [
            'title' => $this->title,
            'subtitle' => $this->subtitle
        ]);
    }
}

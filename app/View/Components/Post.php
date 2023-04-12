<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public $url;
    public $caption;
    /**
     * Create a new component instance.
     */
    public function __construct($url, $caption)
    {
        $this->url = $url;
        $this->caption = $caption;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
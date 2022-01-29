<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Thread;

class ThreadCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $thread;

    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.thread-card');
    }
}

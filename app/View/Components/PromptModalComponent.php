<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PromptModalComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $itemID;

    public function __construct($itemID)
    {
        $this->itemID = $itemID;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.prompt-modal-component');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentPromotion extends Component
{
    public $collection=[]; 
    
    public function render()
    {
        return view('livewire.student-promotion');
    }
}

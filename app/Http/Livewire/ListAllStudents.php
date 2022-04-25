<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListAllStudents extends Component
{
    public $collection=[]; 
    
    public function render()
    {
        return view('livewire.list-all-students');
    }
}

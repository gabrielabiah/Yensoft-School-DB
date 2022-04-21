<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentListTable extends Component
{
    public $student_list=[];

    public function render()
    {

        $this->student_list=Student::all(); 
        return view('livewire.student-list-table');
    }
}

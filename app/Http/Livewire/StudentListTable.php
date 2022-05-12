<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentListTable extends Component
{

    public function render()
    {

        return view('livewire.student-list-table', [
            'student_list' => Student::paginate(10),
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class ListAllStudents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {


        return view(
            'livewire.list-all-students',

            [
                'collection' => Student::paginate(20),
            ]
        );
    }
}

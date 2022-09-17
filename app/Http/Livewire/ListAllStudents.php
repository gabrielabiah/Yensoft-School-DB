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

    public function edit($id)
    {
        dd("Editing $id");
    }

    public function view($id)
    {
        dd("viewing $id");
    }

    public function delete($id)
    {
        $delete = Student::where('id', $id)->delete();
        // session()->flash("message", ['type' => 'success', 'message', 'Record Deleted successfully']);
        return redirect('student-management')->with(
            'message',
            [
                'type' => 'success',
                'message' => 'Record deleted successfully'
            ]
        );
    }
}

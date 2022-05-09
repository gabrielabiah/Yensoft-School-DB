<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\School;
use Auth;

class StudentListTable extends Component
{
    // public $student_list=[];
    public $school_id; 
    public $user;
    public function mount(){
    
        $this->user=Auth::user();  
        $this->school_id=School::where('user_id',$this->user->id)->first()->id;
    
        // dd($this->school_id);
    }
    

    public function render()
    {

        // $this->student_list=Student::where('school_id', $this->school_id)->paginate(10); 
        return view('livewire.student-list-table',[
            'student_list'=>Student::where('school_id', $this->school_id)->paginate(10),
        ]);
    }
}

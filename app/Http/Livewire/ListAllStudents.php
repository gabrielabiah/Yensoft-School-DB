<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Student; 
use App\Models\School; 
use Livewire\WithPagination;
use Auth;

class ListAllStudents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $school_id; 
    public $user;  

    public function mount(){

        $this->user=Auth::user();
        
        $this->school_id=School::where('user_id', $this->user->id)->first()->id;

    }
    
    public function render()
    {
        
        return view('livewire.list-all-students', 
    
    [
        'collection' => Student::where('school_id', $this->school_id)->paginate(20),
    ]);
    }
}

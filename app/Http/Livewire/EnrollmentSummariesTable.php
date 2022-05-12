<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stage;
use App\Models\Student;

class EnrollmentSummariesTable extends Component
{

    public function mount()
    {

        // $this->totalmales=Stage::sum('male_students'); 
        // $this->totalfemales=Stage::sum('total_females'); 
        // $this->totalpopulation=Stage::sum('total_population'); 
        // $this->nameofclass=Stage::find('class'); 

    }
    public function render()
    {
        $stages = Stage::all();

        return view('livewire.enrollment-summaries-table', compact(['stages']));
    }
}

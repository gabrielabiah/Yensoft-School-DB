<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Stage; 

class EnrollmentSummariesTable extends Component
{
    public $totalmales; 
    public $totalfemales;
    public $totalpopulation; 
    public $nameofclass; 

    public function mount(){

        // $this->totalmales=Stage::sum('male_students'); 
        // $this->totalfemales=Stage::sum('total_females'); 
        // $this->totalpopulation=Stage::sum('total_population'); 
        // $this->nameofclass=Stage::find('class'); 

    }
    public function render()
    {
        $summaries=[];

        return view('livewire.enrollment-summaries-table', 
        compact('summaries'));
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DateTime;

class WeeklyFeePaymentChart extends Component
{

    

    public function mount(){

        $date=date('d-m-Y'); 
        // $week= new DateTime($date); 
        // $period=$week->format('W');
        $Monday=getDay('Monday')->format('d-m-Y'); 
        $Tuesday=getDay('Tuesday')->format('d-m-Y'); 
        $Wednesday=getDay('Wednesday')->format('d-m-Y'); 
        $Thursday=getDay('Thursday')->format('d-m-Y'); 
        $Friday=getDay('Friday')->format('d-m-Y'); 

        //Get Fees for days Above
        /* 
        
        Select * from fees where date = $monday;
        Select * from fees where date = $tuesday;

        */

    }
    public function render()
    {
        return view('livewire.weekly-fee-payment-chart');
    }
}

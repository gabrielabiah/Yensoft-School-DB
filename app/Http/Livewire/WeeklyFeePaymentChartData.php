<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeeklyFeePaymentChartData extends Component
{
    public $currency; 

    public function mount(){
        $this->currency="GHS";
    }

    public function render()
    {
        $this->currency="GHS";
        return view('livewire.weekly-fee-payment-chart-data');
    }
}

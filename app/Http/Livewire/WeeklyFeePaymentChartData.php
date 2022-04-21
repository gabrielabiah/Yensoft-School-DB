<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeeklyFeePaymentChartData extends Component
{
    public $currency; 
    public $monday_paid_receipts;
    public $tuesday_paid_receipts;
    public $wednesday_paid_receipts;
    public $thursday_paid_receipts;
    public $friday_paid_receipts;
    public $monday_pending_receipts;
    public $tuesday_pending_receipts;
    public $wednesday_pending_receipts;
    public $thursday_pending_receipts;
    public $friday_pending_receipts;

    public function mount(){
        $this->currency="GHS";

        $this->monday_paid_receipts=0;
         $this->tuesday_paid_receipts=0;
         $this->wednesday_paid_receipts=0;
         $this->thursday_paid_receipts=0;
         $this->friday_paid_receipts=0;
         $this->monday_pending_receipts=0;
         $this->tuesday_pending_receipts=0;
         $this->wednesday_pending_receipts=0;
         $this->thursday_pending_receipts=0;
         $this->friday_pending_receipts=0;
    }

    public function render()
    {
        $this->currency="GHS";
        return view('livewire.weekly-fee-payment-chart-data');
    }
}

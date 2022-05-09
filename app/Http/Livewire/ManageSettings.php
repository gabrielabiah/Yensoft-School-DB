<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\School;
use App\Models\Address;
use Auth;
use Livewire\WithFileUploads;

class ManageSettings extends Component
{
    use WithFileUploads;

    public $school_name; 
    public $short_name;
    public $gps_address;
    public $postal_address; 
    public $region; 
    public $city; 
    public $date_of_establishment; 
    public $sector; 
    public $mobile; 
    public $upload_logo; 
    public $term_start; 
    public $term_end; 
    public $school_id; 
    public $address_id;

    public function mount(){

        $user_id=Auth::user()->id; 
        $this->school_id=School::where('user_id', $user_id)->first()->id;
        
        $this->address_id=School::find($this->school_id)->postal_address_id;

        $this->school_name=School::find($this->school_id)->school_name;
        $this->short_name=School::find($this->school_id)->short_name;
        
        $this->city=Address::find($this->address_id)->city;
        $this->region=Address::find($this->address_id)->region;
        $this->gps_address=Address::find($this->address_id)->gps_address;
        $this->postal_address=Address::find($this->address_id)->postal_address;    

    }

    public function render()
    {
        // $this->short_name="SHORT";
        return view('livewire.manage-settings');
    }



    public function save(){

        
        $this->validate([
            'upload_logo'=>'image|max:5024',
        ], [
            'upload_logo.max'=> "Your logo should not be more than 5MB",
            'upload_logo.image'=> "You selected an unsupported logo format. Kindly use an image (.jpg, .png)",
        ]);

        
    }



}

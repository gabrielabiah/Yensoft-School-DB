<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student; 
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StudentAdmission extends Component
{
    public $surname;
    public $firstname;
    public $othername;
    public $gender; 
    public $date_of_birth;
    public $name_of_parent;
    public $religion; 
    public $postal_address; 
    public $mobile;
    public $nationality; 
    public $region;
    public $hometown; 
    public $photo_upload; 
    public $student_id; 
    public $class; 
    public $house; 
    public $year_of_admission; 

    public function mount(){
        //Generate Student ID 

        $prefix='XYZ-';

        $this->student_id=IdGenerator::generate(['table' => 'students', 'field'=>'student_id', 'length' => 8, 'prefix' => $prefix]);; 

    }

    public function render()
    {
        return view('livewire.student-admission');
    }


    public function save(){

        $this->validate([
            'surname'=>['required'],
            'firstname'=>['required'],
            'gender'=>['required'], 
            'date_of_birth'=>['required'],
            'name_of_parent'=>['required'],
            'religion'=>['required'], 
            'postal_address'=>['required'],
            'mobile'=>['required'],
            'nationality'=>['required'],
            'region'=>['required'],
            'hometown'=>['required'],
            'photo_upload'=>['required'],
            'student_id'=>['required'], 
            'class'=>['required'],
            'house'=>['required'], 
            'year_of_admission'=>['required'], 

        ], [
            'surname.required'=>'You have not provided a surname for the student',
            'firstname.required'=>'Please enter the first name of student',
            'gender.required'=>'Please select a gender',
            'date_of_birth.required'=>'Select a valid date of birth for the student',
            'name_of_parent.required'=>'You must provide valid parent/guardian details',
            'religion.required'=>'Choose a religion for the student',
            'postal_address.required'=>'Provide a valid postal address',
            'mobile.required'=>'Provide a valid mobile contact',
            'hometown.required'=>'You have not provided a hometown',
            'photo_upload.required'=>'Please upload a valid Passport Photo',
            'class.required'=>'You are required to specify the class of the student',
            'year_of_admission.required'=>'Please select the year of admisson',
            'student_id.required'=>"The Student ID Field Is Required",
        ]);

        // dd('saved!');
    }

    public function cancel(){
        return redirect('dashboard');
    }
}

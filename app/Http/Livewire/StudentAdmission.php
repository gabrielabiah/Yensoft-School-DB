<?php

namespace App\Http\Livewire;

use App\Models\Stage;
use Livewire\Component;
use App\Models\Student;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Livewire\WithFileUploads;

class StudentAdmission extends Component
{
    use WithFileUploads;

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
    public $school_id;
    public $classes;
    public $newclass;
    public function mount()
    {
        //Generate Student ID 
        $this->school_id = session()->get('school_id');
        $prefix = 'XYZ-';

        $this->student_id = IdGenerator::generate(['table' => 'students', 'field' => 'student_id', 'length' => 8, 'prefix' => $prefix]);;
    }

    public function render()
    {
        $this->classes = Stage::all();
        return view('livewire.student-admission');
    }


    public function save()
    {

        $this->validate([
            'surname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'name_of_parent' => 'required',
            'religion' => 'required',
            'postal_address' => 'required',
            'mobile' => 'required',
            'nationality' => 'required',
            'region' => 'required',
            'hometown' => 'required',
            'photo_upload' => 'required',
            'student_id' => 'required|unique:students,student_id',
            'class' => 'required',
            'house' => 'required',
            'year_of_admission' => 'required',
            'school_id' => 'required',

        ], [
            'surname.required' => 'You have not provided a surname for the student',
            'firstname.required' => 'Please enter the first name of student',
            'gender.required' => 'Please select a gender',
            'date_of_birth.required' => 'Select a valid date of birth for the student',
            'name_of_parent.required' => 'You must provide valid parent/guardian details',
            'religion.required' => 'Choose a religion for the student',
            'postal_address.required' => 'Provide a valid postal address',
            'mobile.required' => 'Provide a valid mobile contact',
            'region.required' => 'Please select region',
            'hometown.required' => 'You have not provided a hometown',
            'photo_upload.required' => 'Please upload a valid Passport Photo',
            'class.required' => 'You are required to specify the class of the student',
            'house.required' => 'Please enter house details',
            'year_of_admission.required' => 'Please select the year of admisson',
            'student_id.required' => "The Student ID Field Is Required",
            'school_id.required' => "School ID Selection Failed.",
        ]);

        $passport = $this->photo_upload->storeAs('public/photos', $this->student_id . '_passport');

        $save = new Student();
        $save->student_id = $this->student_id;
        $save->student_firstname = $this->firstname;
        $save->student_surname = $this->surname;
        $save->student_othername = $this->othername;
        $save->student_gender = $this->gender;
        $save->student_date_of_birth = $this->date_of_birth;
        $save->student_parent_name = $this->name_of_parent;
        $save->student_photo_url = $passport;
        $save->student_postal_address = $this->postal_address;
        $save->student_mobile = $this->mobile;
        $save->student_region = $this->region;
        $save->student_hometown = $this->hometown;
        $save->student_class = $this->class;
        $save->student_house = $this->house;
        $save->student_religion = $this->religion;
        $save->year_of_admission = $this->year_of_admission;
        $save->school_id = $this->school_id;
        $save->save();

        $this->resetInput();
    }

    public function resetInput()
    {
        return redirect('student-management')->with(
            'message',
            [
                'type' => 'success',
                'message' => 'Student Admission Successful'
            ]
        );;
    }

    public function cancel()
    {
        return redirect('dashboard');
    }

    public function updatedNewclass()
    {

        if ($this->newclass = 'Create New Class') {
            return redirect('classes');
        }
    }
}

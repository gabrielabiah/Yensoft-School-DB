<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stage;

class ManageClasses extends Component
{
    public $class_name;
    public $class_description;
    public $school_id;
    public $class_department;

    public function mount()
    {
        if (session()->has('school_id')) {
            $this->school_id = session()->get('school_id');
        }
    }

    public function render()
    {
        $all_classes = Stage::all();
        return view('livewire.manage-classes', compact(['all_classes']));
    }

    public function save()
    {
        $this->validate([
            'class_name' => ['required'],
            'class_description' => ['required'],
            'class_department' => ['required'],
            'school_id' => ['required'],
        ], [
            'class_name.required' => 'Please provide a valid name for the class.',
            'class_description.required' => 'Class description is requird to create a new class.',
            'class_department.required' => 'Did you forget the department?',
            'school_id' => 'There was problem selecting the school. Please login and try again.',
        ]);

        $store_class = new Stage;
        $store_class->class_name = $this->class_name;
        $store_class->class_description = $this->class_description;
        $store_class->class_department = $this->class_department;
        $store_class->school_id = $this->school_id;
        $store_class->save();

        $this->resetValues();
    }

    public function resetValues()
    {
        // $this->class_name = '';
        // $this->class_description = '';
        // $this->class_department = '';
        // $this->school_id = '';
        $this->reset();
        return redirect()->to(url('/classes'));
    }
}

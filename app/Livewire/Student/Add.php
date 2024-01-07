<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\Student;
use App\Models\Classroom;
use DB;

class Add extends Component
{
    public $studentName;
    public $classroom_id;
    
    public function render()
    {
        $classrooms = DB::table('classrooms')->get();
        return view('livewire.student.add', ['classrooms' => $classrooms]);
    }

    public function save()
    {
        $validatedData = $this->validate([
            'studentName' => 'required'
        ]);

        $student = new Student();

        $student->name = $this->studentName;
        $student->classroom_id = $this->classroom_id;
        $student->save();
        
        $this->dispatch('refreshStudentList');
        $this->dispatch('Notify-Green', message: "قوتابی هاتییە زیدەکرن");

        $this->studentName="";
        $this->classroom_id="";

    }
}
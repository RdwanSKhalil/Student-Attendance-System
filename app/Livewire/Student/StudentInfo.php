<?php

namespace App\Livewire\Student;

use Livewire\Component;
use DB;

class StudentInfo extends Component
{
    public $studentName;
    public $classroom_id;
    public function render()
    {
        $classrooms = DB::table('classrooms')->get();

        $students = DB::table('students')
        ->join("classrooms", "classrooms.id", "=", "students.classroom_id")
        ->select(
            'students.id',
            'students.name',
            'classrooms.name as class',
            'classrooms.department',
            'classrooms.level',
            'students.created_at')->where('students.name', 'like', '%'.$this->studentName.'%')->Where('classroom_id', '=', $this->classroom_id)->orderBy('created_at', 'desc')->get();

        return view('livewire.student.student-info', ['classrooms' => $classrooms, 'students' => $students]);
    }
}

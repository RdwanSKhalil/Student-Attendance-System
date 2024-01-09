<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\studentAbsence;
use App\Models\Student;
use DB;

class Show extends Component
{
    public $id;

    public function render()
    {
        $student = Student::findOrFail($this->id);

        return view('livewire.student.show', ['student' => $student]);
    }

    public function getStudentAbsents($student_id)
    {
        $studentAbsents = DB::table('students')
        ->join("student_absences", "student_absences.student_id", "=", "students.id")
        ->select(
            'students.id as stdID',
            'student_absences.id as absentID',
            'students.name',
            'student_absences.created_at')->where('student_absences.student_id', '=', $student_id)->orderBy('created_at', 'desc')->get();

        return $studentAbsents;
    }
}

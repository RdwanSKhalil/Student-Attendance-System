<?php

namespace App\Livewire\Class;
use App\Models\Classroom;
use App\Models\studentAbsence;
use Livewire\Component;
use DB;
class Show extends Component
{
    public $id;
    public $absentStudents = [];

    public function render()
    {
        $students = DB::table('students')
        ->join("classrooms", "classrooms.id", "=", "students.classroom_id")
        ->select(
            'students.id',
            'students.name',
            'classrooms.name as class',
            'classrooms.department',
            'classrooms.level',
            'students.created_at')->where("classrooms.id", "=" , $this->id)->orderBy('created_at', 'desc')->get();

        $class = Classroom::findOrFail($this->id);

        $classrooms = DB::table('classrooms')->get();
        
        return view('livewire.class.show', ['class' => $class, 'students' => $students, 'classrooms' => $classrooms ]);
    }

    public function recordAbsentStudents()
    {
        $isRecorded = false;
        foreach ($this->absentStudents as $student_id) {

            $studentAbsent = new studentAbsence;

            $record = DB::table('student_absences')
                        ->select('id')
                        ->where('student_id','=',$student_id)
                        ->where(DB::raw('DATE(created_at)'),'=', now()->format('Y-m-d'))->get();

            if($record->count()==0){
                $studentAbsent->student_id = $student_id;

                $studentAbsent->save();
                if($isRecorded == false){
                    $isRecorded = true;
                }
            }
        }
        if($isRecorded){
            $this->dispatch('Notify-Green', message: "قوتایێن نە ئامادە بووی هاتینە هەلگرتن");
        }
    }
    
}

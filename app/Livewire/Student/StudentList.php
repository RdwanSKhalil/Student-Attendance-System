<?php

namespace App\Livewire\Student;
use Livewire\Attributes\On;
use App\Models\Student;
use Livewire\Component;
use DB;

class StudentList extends Component
{
    public $classroom_id;
    public $studentName;

    protected $listeners = ['refreshStudentList' => '$refresh'];

    #[On('refreshStudentList')] 
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
            'students.created_at')->orderBy('created_at', 'desc')->get();
    
        $classrooms = DB::table('classrooms')->get();

        return view('livewire.student.student-list', ['students' => $students, 'classrooms' => $classrooms ]);
    }

    public function destroy($id)
    {
        DB::table('students')->where('id', '=', $id)->delete();

        $this->dispatch('Notify-Red', message:"قوتابی هاتیە ژێبرن");
    }

    public function update($student_id)
    {
        $student = Student::findOrFail($student_id);
        $student->name = $this->studentName;
        if(isset($this->classroom_id)){
            $student->classroom_id = $this->classroom_id;
        }
        $student->save();
    }
}

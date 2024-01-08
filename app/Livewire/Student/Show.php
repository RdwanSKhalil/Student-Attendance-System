<?php

namespace App\Livewire\Student;

use Livewire\Component;

class Show extends Component
{
    public $student;
    
    public function render()
    {
        return view('livewire.student.show');
    }
}

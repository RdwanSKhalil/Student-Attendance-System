<?php

namespace App\Livewire\Class;

use Livewire\Component;
use App\Models\Classroom;
use Illuminate\Support\Str;

class Add extends Component
{
    public $className;
    public $classDescription;
    public $classDepartment = "پەترول";
    public $classLevel = "1";

    public function render()
    {
        return view('livewire.class.add');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'className' => 'required',
            'classDepartment' => 'required',
            'classLevel' => 'required'
        ]);

        $classRoom = new Classroom();

        $classRoom->name = Str::upper($this->className);
        $classRoom->department = $this->classDepartment;
        $classRoom->level = $this->classLevel;
        $classRoom->save();
        
        $this->dispatch('refreshClassesList');

        $this->dispatch('Notify-Green', message: "کلاس هاتیە زیدەکرن");

        $this->className="";
        $this->classDepartment="پەترول";
        $this->classLevel="1";
    }
}

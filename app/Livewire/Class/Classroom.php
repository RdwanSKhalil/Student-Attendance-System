<?php

namespace App\Livewire\Class;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\On;
use DB;

use Livewire\Component;

class Classroom extends Component
{
    #[On('refreshClassesList')] 
    public function render()
    {
        return view('livewire.class.classroom', 
        ['classrooms' => $classrooms = DB::table('classrooms')->get()]);
    }

    public function destroy($id)
    {
        DB::table('classrooms')->where('id', '=', $id)->delete();

        $this->dispatch('Notify-Red', message: "کلاس هاتیە ژێبرن");
    }
}

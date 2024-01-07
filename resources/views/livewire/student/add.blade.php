<div>

    <div class="card text-center mt-3" x-data="{isOpen: false}">
        <div class="card-header fs-3">
          زێدەکرنا زانیاریێن قوتابی
          <button class="btn btn-dark" x-on:click="isOpen = ! isOpen">+</button>
        </div>
        <div class="card-body" x-show='isOpen' x-transition.duration.500ms>
            <h5 class="card-title">زیدەکرنا قوتابیەکێ</h5>
            <p class="card-text" >بو زیدەکرنا قوتابیەکێ هێڤێە زانیاریێت قوتابی بهینە داگرتن و کلیک لسەر دوگما زیدکرن بهیتە کرن</p>
            <div class="text-center">
                <div class="row">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text" id="basic-addon1">ناڤێ قوتابی</span>
                        <input wire:model="studentName" type="text" class="form-control" placeholder="ناڤ" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 col">
                        <label class="input-group-text" for="studentClass">کلاس</label>
                        <select class="form-select" id="studentClass" wire:model="classroom_id">
                            <option> </option>
                            @foreach ($classrooms as $class)
                                <option value="{{$class->id}}">{{ "کلاس: ".$class->name.' - '. "قسم: ".$class->department.' - '. "قوناغ: ".$class->level }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary mb-2" wire:click="save">زیدەکرن</button>
                </div>  
            </div>
        </div>
    </div>

    @livewire('student.student-list')

</div>
<div>

    <div class="card text-center mt-2 mb-5">
        <div class="card-header fs-3 ">
            لیستا قوتابیان
        </div>
        <div class="card-body">
            <div class="container text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ناڤێ قوتابی</th>
                          <th scope="col">بەش</th>
                          <th scope="col">قوناغ</th>
                          <th scope="col">کلاس</th>
                          <th scope="col">کریار</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $student)
                            <tr x-data="{isOpen: false}">
                                <th scope="row">{{$loop->iteration}}</th>
                                <td x-show='!isOpen'>{{$student->name}}</td>
                                <td x-show='!isOpen'>{{$student->department}}</td>
                                <td x-show='!isOpen'>{{$student->level}}</td>
                                <td x-show='!isOpen'>{{$student->class}}</td>
                                <td colspan="2" x-show='isOpen'>
                                    <div class="input-group mb-3 col" >
                                        <span class="input-group-text" id="basic-addon1">ناڤێ قوتابی</span>
                                        <input wire:model="studentName" type="text" class="form-control" placeholder="ناڤ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                                <td colspan="2" x-show='isOpen'>
                                    <div class="input-group mb-3 col" >
                                        <label class="input-group-text" for="studentClass">کلاس</label>
                                        <select class="form-select" id="studentClass" wire:model="classroom_id">
                                            <option>{{"کلاس: ".$student->class.' - '. "قسم: ".$student->department.' - '. "قوناغ: ".$student->level}}</option>
                                            @foreach ($classrooms as $class)
                                                <option value="{{$class->id}}">{{ "کلاس: ".$class->name.' - '. "قسم: ".$class->department.' - '. "قوناغ: ".$class->level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                                <td colspan="2" x-show='isOpen'><button  class="btn btn-dark" wire:click="update({{$student->id}})" x-on:click="isOpen = ! isOpen">گوهورین</button></td>
                                <td>
                                    <button x-show='!isOpen' class="btn btn-dark" x-on:click="isOpen = ! isOpen">گوهورینا زانیاریێت قوتابی</button>
                                    <button x-show='!isOpen' class="btn btn-danger" wire:click="destroy({{$student->id}})">ژێبرن</button>
                                </td>                             
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      
</div>

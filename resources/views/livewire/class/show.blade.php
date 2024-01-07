<div>

    <div class="card text-center mt-5">
        <div class="card-header fs-3 ">
            قوتابیێن کلاسا {{$class->name}}
            <h6 class="mt-2 card-subtitle mb-2 text-body-secondary">{{"بەش: ".$class->department." - قوناغ: ".$class->level}}</h6>
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
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$student->name}}</td>
                                <td>{{$student->department}}</td>
                                <td>{{$student->level}}</td>
                                <td>{{$student->class}}</td>
                                <td><input class="form-check-input" type="checkbox" value="{{$student->id}}" id="{{$loop->iteration}}" wire:model="absentStudents"></td>                         
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <td><button class="btn btn-dark" wire:click="recordAbsentStudents">راکرنا قوتابیێن نە حازربووی</button></td>  
        </div>

    </div>

</div>

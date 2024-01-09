<div>

    <div class="card text-center mt-3" x-data="{isOpen: false}">
        <div class="card-header fs-3">
          زانیاریێت قوتابیان
        </div>
        <div class="card-body">
            <p class="card-text" >لیگەریانا قوتابیان بریکا ناڤی، کلاسی، و هەروەسا بریکا روژی تو دشی لڤیری ئەنجام بدەی</p>
            <div class="text-center">
                <div class="row">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text" id="basic-addon1">ناڤێ قوتابی</span>
                        <input wire:model.live="studentName" type="text" class="form-control" placeholder="ناڤ" aria-label="Username" aria-describedby="basic-addon1">
                    </div>                                
                    <div class="input-group mb-3 col">
                        <label class="input-group-text" for="studentClass">کلاس</label>
                        <select class="form-select" id="studentClass" wire:model.live="classroom_id">
                            <option> </option>
                            @foreach ($classrooms as $class)
                                <option value="{{$class->id}}">{{ "کلاس: ".$class->name.' - '. "قسم: ".$class->department.' - '. "قوناغ: ".$class->level }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>  
            </div>
        </div>
        <div class="card-body">
            <div class="container text-center">
                <table class="table table-hover" x-data="{isOpen: false}">
                    <thead>
                        <tr>
                          <th x-show='!isOpen' scope="col">#</th>
                          <th x-show='!isOpen' scope="col">ناڤێ قوتابی</th>
                          <th x-show='!isOpen' scope="col">بەش</th>
                          <th x-show='!isOpen' scope="col">قوناغ</th>
                          <th x-show='!isOpen' scope="col">کلاس</th>

                          <th x-show='isOpen' scope="col">#</th>
                          <th x-show='isOpen' scope="col">ناڤێ قوتابی</th>
                          <th x-show='isOpen' scope="col">روژانێن نە ئامادە بووی</th>
                          <th scope="col">کریار</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $student)
                        <div x-data="{isOpenTr: false}">
                            <tr>
                                <th x-show='!isOpen' scope="row">{{$loop->iteration}}</th>
                                <td x-show='!isOpen'>{{$student->name}}</td>
                                <td x-show='!isOpen'>{{$student->department}}</td>
                                <td x-show='!isOpen'>{{$student->level}}</td>
                                <td x-show='!isOpen'>{{$student->class}}</td>
                                <td x-show='!isOpen'><button class="btn btn-dark" x-on:click="isOpen = ! isOpen; isOpenTr = ! isOpenTr">دیتنا زانیاریان</button></td>     
                            </tr>                    
                            @foreach ($this->getStudentAbsents($student->id) as $absent)
                                <tr>
                                    <th x-show='isOpenTr' scope="row">{{$loop->iteration}}</th>
                                    <td x-show='isOpenTr'>{{$absent->name}}</td>
                                    <td x-show='isOpenTr'>{{$absent->created_at}}</td>
                                    <td x-show='isOpenTr'>
                                        <button class="btn btn-danger" wire:click='deleteAbsent({{$absent->absentID}})'>ژێبرن</button>
                                        <button class="btn btn-dark" x-on:click="isOpen = ! isOpen; isOpenTr = ! isOpenTr"><i class="bi bi-arrow-left"></i></button>
                                    </td>
                                </tr>
                            @endforeach 
                        </div>                      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

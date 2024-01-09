<div>
    <div class="card text-center mt-3">
        <div class="card-header fs-3">
          زانیاریێت قوتابی: {{$student->name}}
        </div>
        <div class="card-body">
            <div class="text-center">
                <div class="row">                            
                </div>  
            </div>
        </div>
        <div class="card-body">
            <div class="container text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ناڤێ قوتابی</th>
                          <th scope="col">روژانێن نە ئامادە بووی</th>
                          <th scope="col">کریار</th>
                        </tr>
                      </thead>
                      <tbody>                  
                        @foreach ($this->getStudentAbsents($student->id) as $absent)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$absent->name}}</td>
                                <td>{{$absent->created_at}}</td>
                                <td>
                                    <button class="btn btn-danger" wire:click='deleteAbsent({{$absent->absentID}})'>ژێبرن</button>
                                </td>                
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

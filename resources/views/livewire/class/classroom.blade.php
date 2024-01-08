<div>
    
    <div class="card text-center mt-2 mb-5">
        <div class="card-header fs-3 ">
            زانیاریێت کلاسی
        </div>
        <div class="card-body">
            <div class="container text-center">
                <div class="row row-cols-auto">
                    @foreach ($classrooms as $class)
                        <div class="card me-3 mb-3" style="width: 18rem">
                            <div class="card-body">
                                <h5 class="card-title">ناڤێ کلاسێ: {{$class->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary mb-3">بەش: {{$class->department}} - قوناغ: {{$class->level}}</h6>
                                <a href="{{ route('show-class', $class->id) }}" class="btn btn-dark">ببینە</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ژێبرن</button>
                                <!-- Modal -->
                            <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <div class="modal-header ">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">ژێبرنا کلاسی</h1>
                                            </div>
                                        <div class="modal-body">
                                            دەمی ئەڤ کلاسە دهێتە ژێبرن هەر قوتابیەکی دڤی کلاسی دا دی هیتە ژێبرن، تە دڤێت ژێ ببی ڤی کلاسی؟ 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نەخێر</button>
                                            <button wire:click="destroy({{$class->id}})" type="button" class="btn btn-danger" data-bs-dismiss="modal">بەلێ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                    @endforeach
                </div>
              </div>
        </div>
      </div>
  


</div>

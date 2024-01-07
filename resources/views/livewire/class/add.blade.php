<div>

    <div class="card text-center mt-3" x-data="{isOpen: false}">
        <div class="card-header fs-3">
          کلاس
          <button class="btn btn-dark" x-on:click="isOpen = ! isOpen">+</button>
        </div>
        <div class="card-body" x-show='isOpen' x-transition.duration.500ms>
            <h5 class="card-title">زیدەکرنا کلاسەکی</h5>
            <p class="card-text" >بو زیدەکرنا کلاسەکێ هێڤێە زانیاریێت کلاسێ بهینە داگرتن و کلیک لسەر دوگما زیدکرن بهیتە کرن</p>
            <div class="text-center">
                <div class="row">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text" id="basic-addon1">ناڤێ کلاسی</span>
                        <input wire:model="className" type="text" class="form-control" placeholder="ناڤ" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 col">
                        <label class="input-group-text" for="classDepartment">بەش</label>
                        <select class="form-select" id="classDepartment" wire:model="classDepartment">
                          <option>پەترول</option>
                          <option>کومپیوتەر (IT)</option>
                          <option>ژمێریاری</option>
                          <option>کارگیری</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col">
                        <label class="input-group-text" for="classLevel">قونا‌غ</label>
                        <select class="form-select" id="classLevel" wire:model="classLevel">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                    </div>
                    <button class="btn btn-primary mb-2" wire:click="save">زیدەکرن</button>
                </div>  
            </div>
        </div>
    </div>

   @livewire('class.classroom')

</div>
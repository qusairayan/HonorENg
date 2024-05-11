<main>

    <title>أعدادت الموقع</title>
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2">
            <h1>أوقات الدوام</h1>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4 ">السبت</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromSat">من</label>
                                <input class="form-control" id="timeFromSat" type="time" wire:model="timeFromSat"
                                    autofocus @if($offDaySat) disabled @endif >
                                @error('timeFromSat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToSat">إلى</label>
                                <input class="form-control" id="timeToSat" type="time" wire:model="timeToSat"
                                    autofocus @if($offDaySat) disabled @endif>
                                @error('timeToSat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDaySat">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDaySat" id="offDaySat">
                            </div>

                            
                        </div>
                        
                    </div>



                    <h2 class="h5 mb-4 p-2 border-top">الأحد</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromSun">من</label>
                                <input class="form-control" id="timeFromSun" type="time" wire:model="timeFromSun"
                                    autofocus @if($offDaySun) disabled @endif>
                                @error('timeFromSun')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToSun">إلى</label>
                                <input class="form-control" id="timeToSun" type="time" wire:model="timeToSun"
                                    autofocus @if($offDaySun) disabled @endif>
                                @error('timeToSun')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDaySun">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDaySun" id="offDaySun">
                            </div>

                            
                        </div>
                        
                    </div>


                    <h2 class="h5 mb-4 p-2 border-top">الأثنين</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromMon">من</label>
                                <input class="form-control" id="timeFromMon" type="time" wire:model="timeFromMon"
                                    autofocus @if($offDayMon) disabled @endif>
                                @error('timeFromMon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToMon">إلى</label>
                                <input class="form-control" id="timeToMon" type="time" wire:model="timeToMon"
                                    autofocus @if($offDayMon) disabled @endif>
                                @error('timeToMon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDayMon">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDayMon" id="offDayMon">
                            </div>

                            
                        </div>
                        
                    </div>


                    <h2 class="h5 mb-4 p-2 border-top">الثلاثاء</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromTus">من</label>
                                <input class="form-control" id="timeFromTus" type="time" wire:model="timeFromTus"
                                    autofocus @if($offDayTus) disabled @endif>
                                @error('timeFromTus')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToTus">إلى</label>
                                <input class="form-control" id="timeToTus" type="time" wire:model="timeToTus"
                                    autofocus @if($offDayTus) disabled @endif>
                                @error('timeToSat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDayTus">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDayTus" id="offDayTus">
                            </div>

                            
                        </div>
                        
                    </div>

                    <h2 class="h5 mb-4 p-2 border-top">الأربعاء</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromWed">من</label>
                                <input class="form-control" id="timeFromWed" type="time" wire:model="timeFromWed"
                                    autofocus @if($offDayWed) disabled @endif>
                                @error('timeFromWed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToWed">إلى</label>
                                <input class="form-control" id="timeToWed" type="time" wire:model="timeToWed"
                                    autofocus @if($offDayWed) disabled @endif>
                                @error('timeToWed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDayWed">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDayWed" id="offDayWed">
                            </div>

                            
                        </div>
                        
                    </div>

                    <h2 class="h5 mb-4 p-2 border-top">الخميس</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromThu">من</label>
                                <input class="form-control" id="timeFromThu" type="time" wire:model="timeFromThu"
                                    autofocus @if($offDayThu) disabled @endif>
                                @error('timeFromThu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToThu">إلى</label>
                                <input class="form-control" id="timeToThu" type="time" wire:model="timeToThu"
                                    autofocus @if($offDayThu) disabled @endif>
                                @error('timeToThu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDayThu">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDayThu" id="offDayThu">
                            </div>

                            
                        </div>
                        
                    </div>


                    <h2 class="h5 mb-4 p-2 border-top">الجمعة</h2>

                    <div class="row">                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeFromFri">من</label>
                                <input class="form-control" id="timeFromFri" type="time" wire:model="timeFromFri"
                                    autofocus @if($offDayFri) disabled @endif>
                                @error('timeFromFri')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="timeToFri">إلى</label>
                                <input class="form-control" id="timeToFri" type="time" wire:model="timeToFri"
                                    autofocus @if($offDayFri) disabled @endif>
                                @error('timeToFri')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mb-2">
                            <div class="d-flex flex-sm-column align-items-center">
                                <label class="form-check-label" for="offDayFri">
                                    يوم عطلة
                                  </label>
                                <input class="form-check-input" type="checkbox" value="1"  wire:model="offDayFri" id="offDayFri">
                            </div>

                            
                        </div>
                        
                    </div>





                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2"
                            wire:loading.attr="disabled">حفظ الكل</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <main>

<main>
    
    <title>لوحة تحكم Honor</title>

    <div class="py-4"></div>

    <div class="ol col-md-7 col-lg-3 col-xl-4">
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('projects.add') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                مشروع جديد
            </a>
        </div>
    </div>

    <form wire:submit.prevent="add" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <h1>إضافة مشروع جديد</h1>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">معلومات عامة</h2>

                    <div class="row ">
                        <div class="col-12 mb-4">
                            <div class="align-items-center card shadow border-0 text-center p-0">
                                <div class="col-sm-10 mb-3">
                                    <label for="formFile" class="form-label">رفع صورة المشروع</label>
                                    <input class="form-control" type="file" id="image" wire:model="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="name">الاسم</label>
                                <input class="form-control" id="name" type="text"
                                    placeholder="أدخل اسم المشروع" wire:model="name" autofocus required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="title">العنوان</label>
                                <input class="form-control" id="title" type="text"
                                    placeholder="أدخل عنوان المشروع" wire:model="title" autofocus required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="description">الوصف</label>
                                <input class="form-control" id="description" type="text"
                                    placeholder="أدخل وصف المشروع" wire:model="description" autofocus required>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="client">العميل</label>
                                <input class="form-control" id="client" type="text"
                                    placeholder="أدخل اسم العميل" wire:model="client" autofocus required>
                                @error('client')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="date">التاريخ</label>
                                <input class="form-control" id="date" type="date"
                                    placeholder="أدخل تاريخ المشروع" wire:model="date" autofocus required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="number">الرقم</label>
                                <input class="form-control" id="number" type="number"
                                    placeholder="أدخل رقم المشروع" wire:model="number" autofocus required>
                                @error('number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
</main>

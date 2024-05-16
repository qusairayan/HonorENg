<main>

        <title>إضافة منتج جديد</title>
            <form wire:submit.prevent="add" enctype="multipart/form-data">
                @csrf

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                    <h1>إضافة منتج جديد</h1>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">معلومات عامة</h2>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="align-items-center card shadow border-0 text-center p-0">
                                        <div class="col-sm-10 mb-3 ">
                                            <label for="product_image" class="form-label">رفع صورة المنتج</label>
                                            <input class="form-control" type="file" id="product_image" accept="image/png, image/gif, image/jpeg" wire:model="product_image">
                                            @error('product_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="product_name">الاسم</label>
                                        <input class="form-control" id="product_name" type="text"
                                            placeholder="أدخل اسم المنتج" wire:model="product_name" autofocus required>
                                        @error('product_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">
                                    <div>
                                        <label for="product_title">العنوان</label>
                                        <input class="form-control" id="product_title" type="text"
                                            placeholder="أدخل عنوان المنتج" wire:model="product_title" autofocus required>
                                        @error('product_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">
                                    <div>
                                        <label for="product_description">الوصف</label>
                                        <input class="form-control" id="product_description" type="text"
                                            placeholder="أدخل وصف المنتج" wire:model="product_description" autofocus required>
                                        @error('product_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">
                                    <div>
                                        <label for="product_number">الرقم</label>
                                        <input class="form-control" id="product_number" type="number"
                                            placeholder="أدخل رقم المنتج" wire:model="product_number" autofocus required>
                                        @error('product_number')
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
   

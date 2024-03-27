<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة منتج جديد</title>
</head>
<body>
    <main>
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
                                        <label for="formFile" class="form-label">رفع صورة المنتج</label>
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
                                        placeholder="أدخل اسم المنتج" wire:model="name" autofocus required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5 mb-3">
                                <div>
                                    <label for="title">العنوان</label>
                                    <input class="form-control" id="title" type="text"
                                        placeholder="أدخل عنوان المنتج" wire:model="title" autofocus required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5 mb-3">
                                <div>
                                    <label for="description">الوصف</label>
                                    <input class="form-control" id="description" type="text"
                                        placeholder="أدخل وصف المنتج" wire:model="description" autofocus required>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5 mb-3">
                                <div>
                                    <label for="number">الرقم</label>
                                    <input class="form-control" id="number" type="number"
                                        placeholder="أدخل رقم المنتج" wire:model="number" autofocus required>
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
</body>
</html>

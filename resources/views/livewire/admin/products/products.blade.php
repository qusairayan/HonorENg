<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم Honor</title>
</head>
<body>
    <div class="py-4"></div>

    <div class="ol col-md-7 col-lg-3 col-xl-4">
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('products.add') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                منتج جديد
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">الرقم</th>
                    <th class="border-gray-200">العنوان</th>
                    <th class="border-gray-200">الوصف</th>
                    <th class="border-gray-200">الرقم</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border-0 fw-bold">
                            <span class="fw-normal">
                                {{ $product->id }}
                            </span>
                        </td>

                        <td class="border-0 fw-bold">
                            <span class="fw-normal">
                                {{ $product->title }}
                            </span>
                        </td>

                        <td class="border-0 fw-bold">
                            <span class="fw-normal">
                                {{ $product->description }}
                            </span>
                        </td>

                        <td class="border-0 fw-bold">
                            <span class="fw-normal">
                                {{ $product->number }}
                            </span>
                        </td>


                        <td>
                            <a class="btn action-btn btn--danger btn-outline-danger" href="{{ route('products.delete', $product->id) }}" title="delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

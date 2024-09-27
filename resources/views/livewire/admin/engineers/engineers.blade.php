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
            <a href="{{ route('engineers.add') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                مهندس جديد
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">الرقم</th>
                    <th class="border-gray-200">الاسم</th>
                    <th class="border-gray-200">الوصف</th>
                    <th class="border-gray-200">الهاتف</th>
                    <th class="border-gray-200">البريد الإلكتروني</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($engineers as $engineer)
                    <tr>
                        <td class="border-0 fw-bold">
                            <span class="fw-normal">{{ $engineer->id }}</span>
                        </td>
                        
                        <td class="border-0 fw-bold">
                            <span class="fw-normal">{{ $engineer->name }}</span>
                        </td>

                        <td class="border-0 fw-bold">
                            <span class="fw-normal">{{ $engineer->description }}</span>
                        </td>

                        <td class="border-0 fw-bold">
                            <span class="fw-normal">{{ $engineer->email }}</span>
                        </td>
                        
                        <td class="border-0 fw-bold">
                            <span class="fw-normal">{{ $engineer->phone }}</span>
                        </td>


                        <td>
                            <a class="btn action-btn btn--danger btn-outline-danger" href="{{ route('engineers.delete', $engineer->id) }}" title="delete engineer">
                                <i>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" fill="currentColor">
    <path d="M3 6l3 0 0-1c0-0.552 0.448-1 1-1h8c0.552 0 1 0.448 1 1l0 1 3 0c0.552 0 1 0.448 1 1s-0.448 1-1 1l-1 0 0 12c0 1.656-1.344 3-3 3h-8c-1.656 0-3-1.344-3-3l0-12-1 0c-0.552 0-1-0.448-1-1s0.448-1 1-1zm5-1l0 1 6 0 0-1h-6zm9 3l0 12c0 0.552-0.448 1-1 1h-8c-0.552 0-1-0.448-1-1l0-12 10 0z"></path>
  </svg>
</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

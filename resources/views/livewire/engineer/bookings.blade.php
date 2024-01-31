<div>
<title>Honor Dashboard</title>
<div class="py-4">

</div>


<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>

                <th class="border-gray-200">#</th>
                <th class="border-gray-200">العميل</th>
                <th class="border-gray-200">التاريخ</th>
                <th class="border-gray-200">الحالة</th>
                <th class="border-gray-200"></th>
            </tr>
        </thead>
        <tbody>



            @foreach ($bookings as $booking)
                <tr>




                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                            {{ $booking->id }}
                        </span>
                    </td>

                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                            {{ $booking->user_name }}
                        </span>
                    </td>


                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                            {{ $booking->created_at }}
                        </span>
                    </td>

                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                            {{ $booking->status == 'pending' ? 'قيد الأنتظار' : ($booking->status == 'approved' ? 'تم ااموافقة ' : 'تم') }}
                        </span>
                    </td>
                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                            @if ($booking->status == 'pending')
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    wire:click="update_id({{ $booking->id }})" data-bs-target="#modal-rate">الموافقة</button>
                            @endif
                        </span>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
</div>


</div>

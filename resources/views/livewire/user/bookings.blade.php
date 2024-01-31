<div>
<title>Honor Dashboard</title>
<div class="py-4">

</div>


<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>

                <th class="border-gray-200">#</th>
                <th class="border-gray-200">المهندس</th>
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
                            {{ $booking->engineer_name }}
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
                            @if ($booking->status != 'pending' && $booking->rate == 0)
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    wire:click="update_id({{ $booking->id }})" data-bs-target="#modal-rate">تقييم</button>
                            @endif
                        </span>
                    </td>



                </tr>
            @endforeach

        </tbody>
    </table>



    <div class="modal fade" id="modal-rate" tabindex="-1" role="dialog" aria-labelledby="modal-rate" wire:ignore
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <form wire:submit.prevent="rate" enctype="multipart/form-data">
                        @csrf
                        <div class="card p-3 p-lg-4">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h4">تقييم المهندس </h1>
                            </div>
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">التقييم</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        ★
                                    </span>

                                    <select class="form-select" id="rate" wire:model.lazy="rate"
                                        aria-label="التقييم">
                                        <option selected>ادخل النفييم</option>
                                        <option value="1">1 ★ </option>
                                        <option value="2">2 ★ </option>
                                        <option value="3">3 ★ </option>
                                        <option value="4">4 ★ </option>
                                    </select>

                                    <input type="hidden" id="booking_id" wire:model="bookingId" />
                                </div>
                            </div>
                            <!-- End of Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800" id="rateBtn">تقييــم</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div>

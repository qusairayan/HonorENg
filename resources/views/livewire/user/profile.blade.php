<title>Honor Dashboard</title>


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
                            {{ $booking->status }}
                        </span>
                    </td>
                    
                    <td class="border-0 fw-bold">
                        <span class="fw-normal">
                        </span>
                    </td>


          
                   
                </tr>
            @endforeach

        </tbody>
    </table>
    
</div>
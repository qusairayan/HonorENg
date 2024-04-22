<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Engineer;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class EngineerBookingsController extends Component
{
    public $bookingId = '';

    public function render()
    {
        $bookings = Booking::select('bookings.id', 'bookings.status', 'bookings.rate', 'bookings.created_at', 'users.name as user_name')
            ->leftjoin('users', 'users.id', '=', 'bookings.user_id')
            ->where('engineer_id', auth()->user()->id)->get();

        return view('livewire.engineer.bookings', compact('bookings'));
    }

    public function update_id($id)
    {
        $this->bookingId = $id;
        $this->rate();
        
    }

    public function rate()
    {
        // Validate the rating field
        $validator = Validator::make(
            ['rate' => $this->bookingId],
            ['rate' => ['required', 'numeric']]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $booking = Booking::find($this->bookingId);
        $booking->update(['status' => 'approved']);

        return redirect()->route('user.bookings')->with('success', 'Rating updated successfully!');
    }
}

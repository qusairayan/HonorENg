<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Engineer;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;




class UserBookingsController extends Component
{

    public $bookingId = '';
    public $rate = '';


    public function render()
    {
        $bookings = Booking::select('bookings.id', 'bookings.status', 'bookings.rate', 'bookings.created_at', 'engineers.name as engineer_name')
        ->leftjoin('engineers', 'engineers.id', '=', 'bookings.engineer_id')->where('bookings.user_id', auth()->user()->id)->get();
        return view('livewire.user.bookings', compact('bookings'));
    }

    public function update_id($id){
        $this->bookingId=$id;
    }


    public function rate()
    {
        // Validate the rating field
        $validator = Validator::make(
            ['rating' => $this->rate],
            ['rating' => ['required', 'numeric', 'between:1,5']]
        );
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    

        $booking=Booking::find($this->bookingId);
        $booking->update(['rate' => $this->rate]);

    
        $engineer = Engineer::where('user_id',$booking->engineer_id)->first();
        $engineer->rate = $engineer->rate ??  0 + $this->rate;
        $engineer->save();
    
        return redirect()->route('user.bookings')->with('success', 'Rating updated successfully!');
    }

}

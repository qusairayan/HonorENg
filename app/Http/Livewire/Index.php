<?php

namespace App\Http\Livewire;

use App\Models\Engineer;
use Livewire\Component;
use App\Models\Product;
use App\Models\Project;
use App\Models\Booking;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        $engineers = Engineer::all();
        $projectTypes = Project::distinct()->pluck('type');
        $projects = Project::all();
        return view('livewire.index',compact('engineers','products','projects','projectTypes'));
    }
    public function bookEngineer($id){

        if(auth()->user()){
        if(auth()->user()->role !='user'){
            return redirect()->route('login')->with('error', 'Unauthorized. Insufficient role.');
        }
    }
    else{
        return redirect()->route('login')->with('error', 'Unauthorized. Insufficient role.');

    }
        Booking::create(['user_id'=>auth()->user()->id,'engineer_id'=>$id]);
        return redirect()->route('index')->with('message', 'تم الحجز بنجاح. شكرًا لاختياركم! سنتصل بك قريبًا.');
    }
}

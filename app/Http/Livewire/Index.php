<?php

namespace App\Http\Livewire;

use App\Models\Engineer;
use Livewire\Component;
use App\Models\Product;
use App\Models\Project;
use App\Models\Booking;
use App\Models\WrokingHour;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        $engineers = Engineer::all();
        $projectTypes = Project::distinct()->pluck('type');
        $projects = Project::all();




        $saturday=WrokingHour::where('day','saturday')->first();
        $sunday=WrokingHour::where('day','sunday')->first();
        $monday=WrokingHour::where('day','monday')->first();
        $tuseday=WrokingHour::where('day','tuseday')->first();
        $wednseday=WrokingHour::where('day','wednseday')->first();
        $thurseday=WrokingHour::where('day','thurseday')->first();
        $friday=WrokingHour::where('day','friday')->first();


        return view('livewire.index',compact('engineers','products','projects','projectTypes','saturday','sunday','monday','thurseday','tuseday','wednseday','friday'));
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

        $engineer = Engineer::find($id);

        $mailData = [
            'title' => 'لقد حصلت على حجز جديد من HONORECC.COM',
            'body' => ' <br>لقد حصلت على حجز جديد من ('. auth()->user()->name.' )',
        ];
        
        Mail::raw($mailData['body'], function($message) use ($engineer, $mailData) 
        {
            $message->from('suppport@honorecc.com', 'Honor Booking');
            $message->to($engineer->email);
            $message->subject($mailData['title']);
        });
        


        return redirect()->route('index')->with('message', 'تم الحجز بنجاح. شكرًا لاختياركم! سنتصل بك قريبًا.');
    }
}

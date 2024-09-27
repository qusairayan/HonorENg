<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; // Import Request class
use Illuminate\Support\Facades\Storage;
use App\Models\Engineer;
use App\Models\User;


class Engineers extends Component
{


    public function render()
    {
        $engineers = Engineer::all();
        return view('livewire.admin.engineers.engineers', compact('engineers'));
        
    }

    public function delete($engineer){
        $engineer = engineer::find($engineer);
        $user = User::where('email',$engineer->email)->first();
        if($engineer){
            $engineer->delete();}

            if($user){
                $user->delete();}
        return redirect()->route('engineers.engineers');
    }

}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; // Import Request class
use Illuminate\Support\Facades\Storage;
use App\Models\Engineer;


class Engineers extends Component
{


    public function render()
    {
        $engineers = Engineer::all();
        return view('livewire.engineers.engineers', compact('engineers'));
        
    }

}

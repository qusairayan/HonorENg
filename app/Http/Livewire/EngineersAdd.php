<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use App\Models\Engineer;
use App\Models\User;
use Livewire\WithFileUploads; 
use Illuminate\Support\Facades\Hash;


class EngineersAdd extends Component
{
    use WithFileUploads; 

    public $name = '';
    public $description = '';
    public $image ;
    public $phone = '';
    public $address = '';
    public $email = '';
    public $password = '';

    public function render(){
        return view('livewire.admin.engineers.add_new');
    }

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users|unique:engineers',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $image_name = time() . '.' . $this->image->extension();

        $this->image->storeAs('engineers', $image_name, 'public');

        $user=User::create([
            'name' => $this->name,
            'address' => $this->address,
            'email' => $this->email,
            'role' => 'engineer',
            'password' => Hash::make($this->password),
         
        ]);


        
        Engineer::create([
            'name' => $this->name,
            'user_id' => $user->id,
            'phone' => $this->phone,
            'description' => $this->description,
            'image' => $image_name,
            'address' => $this->address,
            'email' => $this->email,
            'password' => Hash::make($this->password),

         
        ]);

return redirect()->route('engineers.engineers');
    }

    

}

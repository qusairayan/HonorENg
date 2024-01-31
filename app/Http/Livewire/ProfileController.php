<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfileController extends Component
{
    public $name = '';
    public $phone = '';
    public $city = '';
    public $email = '';

    public function mount()
    {
        $user = User::find(auth()->user()->id);

        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->city = $user->city;
        $this->email = $user->email;
    }

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'phone' => ['nullable', 'regex:/^[0-9]+$/'],
            'city' => 'string|max:255',
            'email' => 'email|unique:users,email,' . auth()->user()->id,
        ]);

        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'city' => $this->city,
            'email' => $this->email,
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}

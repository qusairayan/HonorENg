<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    //This mounts the default credentials for the admin. Remove this section if you want to make it public.
    public function mount()
    {
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            }
            elseif (auth()->user()->role == 'engineer') {
                return redirect()->intended('/');
            }
            elseif (auth()->user()->role == 'user') {
                return redirect()->intended('/');
            }

            return redirect()->intended('/');
        }
      
    }

    public function login()
    {
        $credentials = $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(['email' => $this->email])->first();
            auth()->login($user, $this->remember_me);
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard');
            }
            elseif ($user->role == 'engineer') {
                return redirect()->intended('/profile');
            }
            elseif ($user->role == 'user') {
                return redirect()->intended('/');
            }
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

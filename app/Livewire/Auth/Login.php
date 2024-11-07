<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $title = 'Login';
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];


    public function login()
    {
        // Validate input data
        $this->validate();

        // Attempt to login with credentials
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->route('dashboard');
        } else {
            // On failed login, add a custom error message
            $this->addError('credentials', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth', ['title' => 'Login']);
    }
}

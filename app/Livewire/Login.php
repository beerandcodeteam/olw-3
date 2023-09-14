<?php

namespace App\Livewire;

use App\Mail\MagicLoginMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $show_feedback = false;

    public function login()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $this->email)->first();

        if ($user) {
            $url = URL::temporarySignedRoute(
                name: 'login.store',
                expiration: 3600,
                parameters: [
                    'email' => $user->email
                ]
            );

            Mail::to($this->email)->queue(new MagicLoginMail($url));
        }

        $this->show_feedback = true;
    }
    public function render()
    {
        return view('livewire.login');
    }
}

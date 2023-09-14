<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;

class UserService
{
    public function store(array $userData, array $address): User
    {
        $user = User::where('email', $userData['email'])->first(['id', 'name', 'email']);

        if (!$user) {
            $user = User::create([...$userData, 'password' => bcrypt(Str::uuid())]);
        }

        $user->addresses()->create($address);

        return $user;
    }
}
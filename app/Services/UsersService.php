<?php

namespace App\Services;

use App\Models\User;
use App\Http\Resources\UserResource;

class UsersService {

    public function store(array $userData): UserResource
    {
        $user = User::create($userData);

        return new UserResource(User::findOrFail($user->id));
    }

    public function update(array $userData, User $user)
    {
        $user->update($userData);
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UsersService;
use App\Http\Resources\UserResource;

class UsersController extends Controller
{
    public function __construct(private UsersService $userService)
    {

    }

    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource(User::findOrFail($user->id));
    }

    public function store(StoreUsersRequest $request)
    {
        $this->userService->store($request->validated());
    }

    public function update(StoreUsersRequest $request, User $user)
    {
        $this->userService->update($request->validated(), $user);
    }

    public function destroy(User $user)
    {
        $this->userService->delete($user);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(WeatherServiceContract $weather)
    {
        $users = User::paginate("3");
        return view("admin.users.index", ["users" => $users, "weather" => $weather]);
    }

    public function create()
    {
        return view("admin.users.create");
    }


    public function store(StoreUserRequest $request, User $user)
    {
        User::create($request->validated());
        return redirect()->route("admin.users.index");
    }

    public function edit(User $user)
    {
        return view("admin.users.edit", ["user" => $user]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route("admin.users.index");
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("admin.users.index");
    }
}

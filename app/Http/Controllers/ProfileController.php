<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("pages.profile", ["user" => $user]);
    }

    public function store(StoreProfileRequest $request)
    {
        $user = Auth::user();
        $user->update($request->validated());
        return Redirect::route("profile")->with("status", "Profile updated successfully");
    }
}

<?php

namespace App\Observers\Admin;

use App\Models\User;
use App\Notifications\SingUpNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class UserObserver
{

    public function created(User $user)
    {
        $admins = User::where("is_admin", true)->get();
        foreach ($admins as $admin) {
            $admin->notify(new SingUpNotification($user));
        }
    }

    public function updated(User $user)
    {
        //
    }

    public function deleted(User $user)
    {
        //
    }

    public function deleting(User $user)
    {
//        if (!($user->avatar = User::NO_IMAGE)) {
//            Storage::delete($user->avatar);
//        }
    }

    public function restored(User $user)
    {
        //
    }

    public function forceDeleted(User $user)
    {
        if ($user->avatar !== User::NO_IMAGE && isset($user->avatar)) {
            Storage::delete($user->avatar);
        }
    }
}

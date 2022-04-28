<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserForceDeleteCommand extends Command
{

    protected $signature = "users:force-delete";

    protected $description = "Delete Users with avatars from Trash";

    public function handle()
    {
        $users = User::onlyTrashed()->get();
        foreach ($users as $user) {
            $user->forceDelete();
        }
        return 0;
    }
}

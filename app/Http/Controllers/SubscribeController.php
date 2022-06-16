<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeSubscriptionRequest;
use App\Mail\SubscribeEmail;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function subscribe(SubscribeSubscriptionRequest $request) {
        $subs = Subscription::add($request->get("email"));
        Mail::to($subs)->send(new SubscribeEmail($subs));
        return redirect()->back()->with("status", "Проверьте Вашу почту! :)");
    }
    public function verify($token) {
        $subs = Subscription::where("token", $token)->firstOrFail();
        dd("OK");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubscriberRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function index()
    {
        $subs = Subscription::paginate(5);
        return view("admin.subs.index", ["subs" => $subs]);
    }

    public function create()
    {
        return view("admin.subs.create");
    }

    public function store(StoreSubscriberRequest $request, Subscription $sub)
    {
        Subscription::add($request->get("email"));
        return redirect()->route("admin.subs.index");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Subscription::find($id)->remove();
        return redirect()->route("admin.subs.index");
    }
}

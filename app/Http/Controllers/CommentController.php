<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $comment = new Comment();
        $comment->text = $request->get("message");
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->get("post_id");
        $comment->save();
        return redirect()->back()->with("status", "Comment will be added soon...");
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Models\artikel;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(artikel $artikel, CommentsRequest $request)
    {
        $data = $request->validated();
        $comment = new Comment();

        $comment->artikel_id = $artikel->id;
        $comment->author     = $data['author'];
        $comment->text       = $data['text'];
        $comment->save();

        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}

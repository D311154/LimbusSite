<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:1000',
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return redirect()->route('LimbusCompany.index')->with('success', 'Comment posted successfully!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Only allow admin (user ID 1) or the comment author to delete
        if (auth()->user()->id === 1 || auth()->user()->id === $comment->user_id) {
            $comment->delete();
            return redirect()->route('LimbusCompany.index')->with('success', 'Comment deleted successfully!');
        }

        return redirect()->route('LimbusCompany.index')->with('error', 'Unauthorized action.');
    }
}

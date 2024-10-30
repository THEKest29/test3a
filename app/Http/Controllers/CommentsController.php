<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function index() {
        $comments = Comments::orderBy(column: 'id', direction: 'desc')->cursorPaginate(5);
        return view('share', compact('comments'));
    }
    public function show(Request $req) {
        Comments::Create(attributes:[
            'text' => $req->text,
        ]);

        return redirect(to: '/blogs');
    }
}

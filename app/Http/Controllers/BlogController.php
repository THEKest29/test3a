<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blogs::orderBy(column: 'id', direction: 'desc')->cursorPaginate(3);
        return view('index', compact('blogs'));
    }

    public function show(Request $request) {
        Blogs::Create(attributes:[
            'title' => $request->title,
            'psevdo' => $request->psevdo,
            'text' => $request->text,
        ]);
        return redirect(to: '/blogs');
    }
    public function share($id) {
        $blogs = Blogs::findOrFail($id);
        return view('share', compact('blogs'));
    }
}

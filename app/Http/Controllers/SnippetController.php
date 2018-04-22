<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\Auth;

class SnippetController extends Controller
{
    public function index()
    {
        $snippets = Snippet::where('user_id', Auth::id());
        return view('home', ['snippets' => $snippets]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function morning()
    {
        return view('comments.morning');
    }
    public function afternoon()
    {
        return view('comments.afternoon');
    }
    public function evening()
    {
        return view('comments.evening');
    }
    public function night()
    {
        return view('comments.night');
    }
    public function freeword($msg)
    {
        return view('comments.freeword', ['msg' => $msg]);
    }
    public function shuffle()
{
    $greeting = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
    shuffle($greeting);
    $selectedGreeting = $greeting[0];
    return view('comments.shuffle', ['selectedGreeting' => $selectedGreeting]);
}
}

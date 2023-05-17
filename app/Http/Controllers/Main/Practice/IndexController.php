<?php

namespace App\Http\Controllers\Main\Practice;

use App\Http\Controllers\Controller;
use App\Models\Practice;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Practice::all()->sortByDesc('id');
        return view('main.practices.index', compact('lessons'));
    }
}

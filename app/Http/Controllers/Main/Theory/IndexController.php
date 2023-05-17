<?php

namespace App\Http\Controllers\Main\Theory;

use App\Http\Controllers\Controller;
use App\Models\Theory;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Theory::all()->sortByDesc('id');
        return view('main.theories.index', compact('lessons'));
    }
}

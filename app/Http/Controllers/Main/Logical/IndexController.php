<?php

namespace App\Http\Controllers\Main\Logical;

use App\Http\Controllers\Controller;
use App\Models\Logical;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Logical::all()->sortByDesc('id');
        return view('main.logicals.index', compact('lessons'));
    }
}

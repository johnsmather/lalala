<?php

namespace App\Http\Controllers\Main\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Test::all()->sortByDesc('id');
        return view('main.tests.index', compact('lessons'));
    }
}

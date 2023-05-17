<?php

namespace App\Http\Controllers\Main\Theory;

use App\Http\Controllers\Controller;
use App\Models\Theory;

class ShowController extends Controller
{
    public function __invoke(Theory $theory)
    {
        $lessons = Theory::all();
        return view('main.theories.show', compact('theory'));
    }
}

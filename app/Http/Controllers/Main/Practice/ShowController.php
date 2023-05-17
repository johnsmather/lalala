<?php

namespace App\Http\Controllers\Main\Practice;

use App\Http\Controllers\Controller;
use App\Models\Practice;

class ShowController extends Controller
{
    public function __invoke(Practice $practice)
    {
        return view('main.practices.show', compact('practice'));
    }
}

<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Logical;
use App\Models\Practice;
use App\Models\Test;
use App\Models\Theory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $auth = Auth::user();
        $theories = Theory::all()->count();
        $practices = Practice::all()->count();
        $tests = Test::all()->count();
        $logicals = Logical::all()->count();
        return view('main.index', compact('auth', 'theories', 'practices', 'tests', 'logicals'));
    }
}

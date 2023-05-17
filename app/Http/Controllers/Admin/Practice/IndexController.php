<?php

namespace App\Http\Controllers\Admin\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practice;

class IndexController extends Controller
{
    public function __invoke()
    {
        $practices = Practice::all()->sortByDesc('id');
        return view('admin.practice.index', compact('practices'));
    }
}

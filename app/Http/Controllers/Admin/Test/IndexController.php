<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all()->sortByDesc('id');
        return view('admin.test.index', compact('tests'));
    }
}

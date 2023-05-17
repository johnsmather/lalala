<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestTasks;

class IndexController extends Controller
{
    public function __invoke()
    {
        $testTasks = TestTasks::all()->sortByDesc('id');
        return view('admin.testTasks.index', compact('testTasks'));
    }
}

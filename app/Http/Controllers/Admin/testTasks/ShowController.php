<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestTasks;

class ShowController extends Controller
{
    public function __invoke(TestTasks $testTasks)
    {
        return view('admin.testTasks.show', compact('testTasks'));
    }
}

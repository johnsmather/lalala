<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestTasks;

class EditController extends Controller
{
    public function __invoke(TestTasks $testTasks)
    {
        return view('admin.testTasks.edit', compact('testTasks'));
    }
}

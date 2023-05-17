<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all();
        return view('admin.testTasks.create', compact('tests'));
    }
}

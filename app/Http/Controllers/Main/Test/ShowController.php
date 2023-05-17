<?php

namespace App\Http\Controllers\Main\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\TestTasks;

class ShowController extends Controller
{
    public function __invoke(Test $test)
    {
        $test_tasks = TestTasks::all()
                                ->where('test_id', $test->id)
                                ->random(10);
        return view('main.tests.show', compact('test'), compact('test_tasks'));
    }
}

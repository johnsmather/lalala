<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestTasks;

class DeleteController extends Controller
{
    public function __invoke(TestTasks $testTasks)
    {
        $testTasks->delete();
        return redirect()->route('admin.testTasks');
    }
}

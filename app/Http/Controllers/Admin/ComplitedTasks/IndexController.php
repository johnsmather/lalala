<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComplitedTasks;

class IndexController extends Controller
{
    public function __invoke()
    {
        $complitedTasks = ComplitedTasks::all()->sortByDesc('id');
        return view('admin.ComplitedTasks.index', compact('complitedTasks'));
    }
}

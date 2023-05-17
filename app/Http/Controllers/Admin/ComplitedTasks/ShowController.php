<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComplitedTasks;

class ShowController extends Controller
{
    public function __invoke(ComplitedTasks $complitedTasks)
    {
        return view('admin.ComplitedTasks.show', compact('complitedTasks'));
    }
}

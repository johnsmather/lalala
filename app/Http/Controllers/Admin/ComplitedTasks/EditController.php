<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use App\Models\ComplitedTasks;
use Illuminate\Http\Request;
use App\ModelsComplitedTasks;

class EditController extends Controller
{
    public function __invoke(ComplitedTasks $complitedTasks)
    {
        return view('admin.ComplitedTasks.edit', compact('complitedTasks'));
    }
}

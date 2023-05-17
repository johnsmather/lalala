<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComplitedTasks;

class DeleteController extends Controller
{
    public function __invoke(ComplitedTasks $complitedTasks)
    {
        $complitedTasks->delete();
        return redirect()->route('admin.ComplitedTasks');
    }
}

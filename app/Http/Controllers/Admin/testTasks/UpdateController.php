<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TestTasks\UpdateRequest;
use App\Models\TestTasks;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, TestTasks $testTasks)
    {
        $data = $request->validated();
        $testTasks->update($data);
        return view('admin.testTasks.show', compact('testTasks'));;
    }
}

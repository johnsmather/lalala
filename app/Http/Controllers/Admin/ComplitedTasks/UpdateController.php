<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ComplitedTasks\UpdateRequest;
use App\Models\ComplitedTasks;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, ComplitedTasks $complitedTasks)
    {
        $data = $request->validated();
        $complitedTasks->update($data);
        return view('admin.ComplitedTasks.show', compact('complitedTasks'));;
    }
}

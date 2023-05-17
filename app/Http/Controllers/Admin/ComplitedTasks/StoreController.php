<?php

namespace App\Http\Controllers\Admin\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ComplitedTasks\StoreRequest;
use App\Models\ComplitedTasks;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        ComplitedTasks::create($data);
        return redirect(route('admin.ComplitedTasks'));
    }
}

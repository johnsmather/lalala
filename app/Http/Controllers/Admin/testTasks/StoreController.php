<?php

namespace App\Http\Controllers\Admin\TestTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TestTasks\StoreRequest;
use App\Models\TestTasks;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        TestTasks::create($data);
        return redirect(route('admin.testTasks'));
    }
}

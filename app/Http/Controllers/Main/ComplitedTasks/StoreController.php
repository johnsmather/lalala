<?php

namespace App\Http\Controllers\Main\ComplitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Main\ComplitedTasks\StoreRequest;
use App\Models\ComplitedTasks;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        ComplitedTasks::create($data);
    }
}

<?php

namespace App\Http\Controllers\Admin\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Practice\StoreRequest;
use App\Models\Practice;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Practice::create($data);
        return redirect(route('admin.practice'));
    }
}

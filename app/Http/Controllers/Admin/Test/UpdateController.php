<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Test\UpdateRequest;
use App\Models\Test;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Test $test)
    {
        $data = $request->validated();
        $test->update($data);
        return view('admin.test.show', compact('test'));;
    }
}

<?php

namespace App\Http\Controllers\Admin\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Practice\UpdateRequest;
use App\Models\Practice;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Practice $practice)
    {
        $data = $request->validated();
        $practice->update($data);
        return view('admin.practice.show', compact('practice'));;
    }
}

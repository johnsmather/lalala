<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Theory\UpdateRequest;
use App\Models\Theory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Theory $theory)
    {
        $data = $request->validated();
        $theory->update($data);
        return view('admin.theory.show', compact('theory'));;
    }
}

<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class DeleteController extends Controller
{
    public function __invoke(Test $test)
    {
        $test->delete();
        return redirect()->route('admin.test');
    }
}

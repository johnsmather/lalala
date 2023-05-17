<?php

namespace App\Http\Controllers\Admin\Logical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logical;

class ShowController extends Controller
{
    public function __invoke(Logical $logical)
    {
        return view('admin.logical.show', compact('logical'));
    }
}

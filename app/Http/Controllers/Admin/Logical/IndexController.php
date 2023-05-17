<?php

namespace App\Http\Controllers\Admin\Logical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logical;

class IndexController extends Controller
{
    public function __invoke()
    {
        $logicals = Logical::all()->sortByDesc('id');
        return view('admin.logical.index', compact('logicals'));
    }
}

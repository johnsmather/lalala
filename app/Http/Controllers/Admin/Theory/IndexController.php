<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theory;

class IndexController extends Controller
{
    public function __invoke()
    {
        $theories = Theory::all()->sortByDesc('id');
        return view('admin.theory.index', compact('theories'));
    }
}

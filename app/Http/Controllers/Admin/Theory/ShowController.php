<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theory;

class ShowController extends Controller
{
    public function __invoke(Theory $theory)
    {
        return view('admin.theory.show', compact('theory'));
    }
}

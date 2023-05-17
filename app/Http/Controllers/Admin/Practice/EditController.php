<?php

namespace App\Http\Controllers\Admin\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practice;

class EditController extends Controller
{
    public function __invoke(Practice $practice)
    {
        return view('admin.practice.edit', compact('practice'));
    }
}

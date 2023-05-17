<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theory;

class EditController extends Controller
{
    public function __invoke(Theory $theory)
    {
        return view('admin.theory.edit', compact('theory'));
    }
}

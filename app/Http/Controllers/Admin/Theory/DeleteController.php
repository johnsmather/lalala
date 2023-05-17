<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theory;

class DeleteController extends Controller
{
    public function __invoke(Theory $theory)
    {
        $theory->delete();
        return redirect()->route('admin.theory');
    }
}

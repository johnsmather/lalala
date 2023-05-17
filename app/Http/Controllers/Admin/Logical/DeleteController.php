<?php

namespace App\Http\Controllers\Admin\Logical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logical;

class DeleteController extends Controller
{
    public function __invoke(Logical $logical)
    {
        $logical->delete();
        return redirect()->route('admin.logical');
    }
}

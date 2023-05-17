<?php

namespace App\Http\Controllers\Admin\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practice;

class DeleteController extends Controller
{
    public function __invoke(Practice $practice)
    {
        $practice->delete();
        return redirect()->route('admin.practice');
    }
}

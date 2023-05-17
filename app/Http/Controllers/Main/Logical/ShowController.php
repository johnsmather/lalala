<?php

namespace App\Http\Controllers\Main\Logical;

use App\Http\Controllers\Controller;
use App\Models\ComplitedTasks;
use App\Models\Logical;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Logical $logical)
    {
        $complitedLogical = ComplitedTasks::where('category', 3)
            ->where('user_id', Auth::user()->id)
            ->where('test_id', $logical->id)->get();
        $complited = 0;
        if(count($complitedLogical) != 0) {
            $complited = 1;
        }
        return view('main.logicals.show', compact('logical', 'complited'));
    }
}

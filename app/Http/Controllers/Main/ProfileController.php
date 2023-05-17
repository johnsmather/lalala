<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ComplitedTasks;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $complited_tasks = ComplitedTasks::all()
                                            ->where('user_id', $user->id)
                                            ->sortByDesc('created_at');
        $test_points = $complited_tasks->where('category', 1)->sum('points');
        $practice_points = $complited_tasks->where('category', 2)->sum('points');
        $logic_points = $complited_tasks->where('category', 3)->sum('points');
        $points = $complited_tasks->sum('points');
        $length = count($complited_tasks);
        $test_length = count($complited_tasks->where('category', 1));
        $practice_length = count($complited_tasks->where('category', 2));
        $logic_length = count($complited_tasks->where('category', 3));

        return view('main.profile', compact('complited_tasks', 'points', 'length', 'test_points', 'practice_points', 'logic_points', 'test_length', 'practice_length', 'logic_length'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Logical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Logical\StoreRequest;
use App\Models\Logical;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if($data['img'] == 1) {
            $data['text'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        Logical::create([
            'name' => $data['name'],
            'text' => $data['text'],
            'answer' => $data['answer'],
            'points_multiplier' => $data['points_multiplier']
        ]);
        return redirect(route('admin.logical'));
    }
}

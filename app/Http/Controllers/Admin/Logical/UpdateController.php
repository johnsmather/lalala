<?php

namespace App\Http\Controllers\Admin\Logical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Logical\UpdateRequest;
use App\Models\Logical;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Logical $logical)
    {
        $data = $request->validated();
        if($data['img'] == 1) {
            $data['text'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        $logical->update([
            'name' => $data['name'],
            'text' => $data['text'],
            'answer' => $data['answer'],
            'points_multiplier' => $data['points_multiplier']
        ]);
        return view('admin.logical.show', compact('logical'));;
    }
}

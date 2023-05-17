<?php

namespace App\Http\Controllers\Admin\Theory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Theory\StoreRequest;
use App\Models\Theory;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Theory::create([
            'name' => $data['name'],
            'text' => $data['text']
        ]);
        return redirect(route('admin.theory'));
    }
}

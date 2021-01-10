<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoriteStoreRequest;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(FavoriteStoreRequest $request)
    {
        $store = Favorite::create([
            'user_id' => Auth()->id(),
            'post_id' => $request->input('post_id'),
        ]);
        return response()->json(['success' => $store]);
    }
    public function destroy($id)
    {
        $delete = Favorite::query()->find($id)->delete();
        return response()->json(['success' => $delete]);
    }
}

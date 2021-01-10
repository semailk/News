<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::query()
            ->where('user_id', auth()->id())
            ->with(['post:id,title,body'])
            ->get();

        //dd($favorites);

        return view('favorite.index', compact('favorites'));
    }
}

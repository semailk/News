<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.index', compact('categories'));
    }

    public function edit()
    {
        return view('admin.edit');
    }

    public function postStore(AdminPostRequest $request)
    {
        $img = $request->file('img')->store('uploads', 'public');

        $post = Post::query()->create([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'img' => $img
        ]);
        return redirect()->back()->with(['success' => 'Запись сохранена']);
    }

    public function slideEdit()
    {
        $images = Slide::all();
        return view('admin.slideEdit', compact('images'));
    }

    public function slideUpdate(Request $request)
    {
        $rules = ['img' => 'required'];
        $this->validate($request, $rules);
        $name = $request->file('img')->store('slide', 'public');
        Slide::query()->create(['img' => $name]);

        return redirect()->back();
    }

    public function slideDelete($id)
    {
        $nameImg = Slide::query()->find($id);
        Slide::query()->find($id)->delete();
        Storage::disk('public')->delete($nameImg->img);
        return redirect()->back();
    }
}

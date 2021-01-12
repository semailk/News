<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slayd;
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

    public function categoryStore(Request $request)
    {
        Category::query()->create([
            'title' => $request->input('title')
        ]);

        return redirect()->back()->with(['success' => 'Сохранено!']);
    }

    public function getCategories()
    {
        $categories = Category::query()->select('id', 'title')->paginate(10);
        $title = Category::query()->select('title')->get();

        return view('admin.categories', compact('categories', 'title'));
    }

    public function destroy($id)
    {
        Category::query()->find($id)->delete();
        return redirect()->back()->with(['success' => 'Запись успешно удалена.']);
    }

    public function slaydEdit()
    {
        $images = Slayd::all();
        return view('admin.slaydEdit', compact('images'));
    }

    public function slaydUpdate(Request $request)
    {
        Storage::disk('public')->delete('slayd/O550IxsuHD7bBrfpgdcVwh3GUP84AJvbZfo7eW7H.jpg');
        $rules = ['img' => 'required'];
        $this->validate($request, $rules);
        $name = $request->file('img')->store('slayd', 'public');
        Slayd::query()->create(['img' => $name]);

        return redirect()->back();
    }
}

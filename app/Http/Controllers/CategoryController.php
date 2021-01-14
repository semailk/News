<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::query()->findOrFail($id)->posts;
        $categories = Category::all();
        return view('categories.index', compact('category', 'categories'));
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

    public function destroyCategory($id)
    {
        Category::query()->find($id)->delete();
        return redirect()->back()->with(['success' => 'Запись успешно удалена.']);
    }
}

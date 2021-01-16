<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSuggestionRequest;
use App\Models\Category;
use App\Models\UserSuggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserSuggestionController extends Controller
{
    public function index()
    {
        return view('user_suggestions.index');
    }

    public function message()
    {
        $categories = Category::all();
        return view('user_suggestions.message_moderator', compact('categories'));
    }

    public function storePost(UserSuggestionRequest $request)
    {
        $imgSave = $request->file('img')->store('UserSuggestion', 'public');

        UserSuggestion::query()->create([
            'category_id' => $request->input('category_id'),
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'img' => $imgSave,
            'checked_at' => 0
        ]);
        return redirect()->back()->
        with(['success' => 'Сообщение доставленно и в скорем времени будет проверено модератором']);
    }

    public function newsFromUsers()
    {
        $news = UserSuggestion::all();
        return view('user_suggestions.NewsFromUsers', compact('news'));
    }

    public function weather()
    {
        return view('user_suggestions.weather');
    }

    public function weatherResponse(Request $request)
    {
        $cityName = $request->input('city');
        $apiKey = "306c1fbab8f615761ae2aa227a688a30";
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityName . "&appid=" . $apiKey;
        $crequest = curl_init();

        curl_setopt($crequest, CURLOPT_HEADER, 0);
        curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($crequest, CURLOPT_URL, $apiUrl);
        curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($crequest, CURLOPT_VERBOSE, 0);
        curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($crequest);

        curl_close($crequest);
        $data = json_decode($response);
        $currentTime = time();

        return view('user_suggestions.weather', compact('data', 'currentTime'));
    }

    public function getAddPosts()
    {
        $notRead = UserSuggestion::query()->where('checked_at', '=', 0)->get();
        $read = UserSuggestion::query()->where('checked_at', '=', 1)->get();

        return view('admin.userSeggestion', compact('notRead', 'read'));
    }
}

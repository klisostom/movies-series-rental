<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $url = "https://api.themoviedb.org/3/search/movie";

        $response = Http::get($url, [
            'api_key' => '7b652dcc6aa9536f7843b1e5f48973d7',
            'query' => 'Jack Reacher',
        ])->json();

        return view('list', ['data' => $response]);
    }
}

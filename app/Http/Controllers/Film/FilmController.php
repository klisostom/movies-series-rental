<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Services\FilmSearchService as Service;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request, Service $searchService)
    {
        $search = $request->input('search');
        $result = $searchService->execute($search);

        return view('pages.list', ['data' => $result]);
    }

    public function rent(Request $request)
    {
        $inputs = json_decode($request->btnRent, true);

        $data = [
            'title' => $inputs['title'],
            'img' => $inputs['img'],
        ];

        return view('pages.rent', ['data' => $data]);
    }
}

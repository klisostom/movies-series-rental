<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Services\FilmSearchService as Service;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request, Service $searchService)
    {
        $result = $searchService->execute($request->search);

        return view('pages.list', ['data' => $result]);
    }

}

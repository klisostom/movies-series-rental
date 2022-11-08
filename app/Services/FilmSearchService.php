<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FilmSearchService implements ServiceInterface
{
    private string $url = "https://api.themoviedb.org/3/search/movie";

    public function execute($search)
    {
        return Http::get($this->url, [
            'api_key' => env('THEMOVIEDB_KEY'),
            'query' => $search,
        ])->json();
    }
}

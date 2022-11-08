<?php

use function Pest\Laravel\get;

test('test search', function () {
    $response = get("/film/search/");

    $response->assertViewHas('data');
    expect($response['data'])->toHaveKeys(['page', 'results', 'total_pages', 'total_results']);
    expect($response['data'])->each->not->toBeEmpty();
});

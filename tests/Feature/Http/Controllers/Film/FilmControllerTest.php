<?php


test('test search', function () {
    // Arrange
    $search = 'Jack Reacher';

    // Act
    $response = $this->call('GET', '/film/search/', ['search' => $search]);

    // Assert
    $response->assertViewHas('data');
    expect($response['data'])->toHaveKeys(['page', 'results', 'total_pages', 'total_results']);
    expect($response['data'])->each->not->toBeEmpty();

    foreach ($response['data']['results'] as $result) {
        if ($result['original_title']) {
            expect($result['original_title'])->toStartWith('Jack Reacher');
        }
    }
});

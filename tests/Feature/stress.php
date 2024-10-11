<?php

use function Pest\Stressless\stress;


test('black friday', function () {
    // Run locally with:
    // php artisan serve
    $result = stress('http://127.0.0.1:8000/')
        ->concurrently(5)
        ->for(10)->seconds();

    $requests = $result->requests;

    expect($requests->failed->count)
        ->toBe(0);

    expect($requests->duration->med)
        ->toBeLessThan(100.0); // 100ms
});

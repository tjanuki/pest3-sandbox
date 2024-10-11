<?php
use function Pest\Stressless\stress;


test('black friday', function () {
    $result = stress('example.com')
        ->concurrently(5)
        ->for(10)->seconds();

    $requests = $result->requests;

    expect($requests->failed->count)
        ->toBe(0);

    expect($requests->duration->med)
        ->toBeLessThan(100.0); // 100ms
});

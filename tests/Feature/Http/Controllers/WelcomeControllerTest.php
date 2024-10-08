<?php

use App\Http\Controllers\WelcomeController;

covers(WelcomeController::class);

it('show welcome page', function () {
    $this->get('/')->assertStatus(200);
});


<?php


arch()->expect('dd')->not->toBeUsed();

arch()->expect('App\Http')
    ->toOnlyBeUsedIn('App\Http');

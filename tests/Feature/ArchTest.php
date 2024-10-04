<?php


arch()->expect('dd')->not->toBeUsed();

//arch()->expect('App\Http')
//    ->toOnlyBeUsedIn('App\Http');

arch()
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump']);

arch()->preset()->laravel();

//arch('app')
//    ->expect('App\Models')
//    ->toBeAbstract();

arch('app')
    ->expect('App\Enums')
    ->toBeEnums();

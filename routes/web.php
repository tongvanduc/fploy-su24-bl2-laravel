<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Models\Example;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $example = Example::query()->first();
    $example->users;
    echo 1;
});

$cruds = [
    'categories' => CategoryController::class,
    'orders' => OrderController::class,
];

foreach ($cruds as $obj => $controller) {
    Route::resource($obj, $controller);
}

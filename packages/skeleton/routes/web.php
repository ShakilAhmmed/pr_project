<?php

use Illuminate\Support\Facades\Route;

Route::group(["namespace" => "SoftArch\PrProject\Skeleton\Controllers"], function () {
    Route::resource("/skeleton", "SkeletonController");
});


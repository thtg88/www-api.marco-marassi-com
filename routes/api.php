<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'v1'], function () {
    // Conctact Request routes...
    Route::post('contact-requests', 'ContactRequestController@store');
});

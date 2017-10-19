<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'v1'], function () {

  // Ping routes...
  Route::get('ping', function() {
    return response()->json(['success' => true]);
  });

  // Conctact Request routes...
  Route::post('contact-requests', 'ContactRequestController@store');
});

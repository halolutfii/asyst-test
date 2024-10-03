Route::post('/flights/search', [App\Http\Controllers\FlightController::class, 'searchFlight']);
Route::get('/flights/{id}', [App\Http\Controllers\FlightController::class, 'getFlight']);
Route::post('/bookings', [App\Http\Controllers\FlightController::class, 'createBooking']);
Route::get('/bookings/{id}', [App\Http\Controllers\FlightController::class, 'getBooking']);

<?php
function getWatchlist() {
    $watchlist = \App\Models\Watchlist::all();

    $cars = [];

    foreach ($watchlist as $item) {
        $car = \App\Models\Car::find($item->car_id);
        if ($car) {
            $cars[] = $car; // Collect the Car objects
        }
    }

    return $cars; // Returns array of Car objects
}
function getWatchlistById($id) {
    // Get the user's watchlist with the related cars
    $watchlist = \App\Models\Watchlist::where('user_id', $id)->pluck('car_id');

    // Fetch the cars in a single query
    $cars = \App\Models\Car::whereIn('id', $watchlist)->get();

    return $cars; // Returns a collection of Car objects
}


function hello(){
    echo "hello";
}

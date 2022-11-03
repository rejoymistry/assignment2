<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome', ["Status" => "Welcome to the Trademark Registration Center"]);
});

Route::post('/listbycategory', function () {
    $query = DB::table('trademarks')->where('Category', "LIKE", $_POST["category"])->get()->toArray();
    $ar = json_decode(json_encode($query), true);
    $l = [];
    foreach ($ar as $record) {
        $l[] = $record['TrademarkName'];
    }
    return view('TrademarksList', ["trademarks" => $l, "category" => $_POST["category"]]);
});

Route::post('/listbyowner', function () {
    $query = DB::table('trademarks')->where('OwnerName', "LIKE", trim($_POST["ownerName"]))
        ->where('Category', "LIKE", $_POST["category"])->get()->toArray();
    $ar = json_decode(json_encode($query), true);
    $l = [];
    foreach ($ar as $record) {
        $l[] = $record['TrademarkName'];
    }
    return view('ListByOwner', ["trademarks" => $l, "name" => $_POST["ownerName"], "category" => $_POST["category"]]);
});

Route::get('/mytrademarks', function () {
    $query = DB::table('trademarks')->where('OwnerEmail', "LIKE", auth()->user()->email)->get()->toArray();
    $ar = json_decode(json_encode($query), true);
    $l = [];
    foreach ($ar as $record) {
        $l[] = $record['TrademarkName'];
    }
    return view('MyTrademarks', ["trademarks" => $l, "count" => count($l)]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/registerTrademark', 'App\Http\Controllers\RegisterController@store');
Route::get('/registerTrademark/create', 'App\Http\Controllers\RegisterController@create');

Route::get('/search/create', 'App\Http\Controllers\SearchController@create');
Route::post('/search', 'App\Http\Controllers\SearchController@store');


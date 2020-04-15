<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::any('/', function (Request $request) {
    $pesos = $request->get('money', null);

    if ($pesos !== null) {
        try {
            $dollars = $pesos / 64.53;
        } catch (\Exception $e) {
            $error = true;
            Log::error('Error fetching exchange rates: ' . $e->getMessage(), [
                'exception' => $e,
            ]);
        }
    }

    return view('welcome', [
        'pesos'   => $pesos,
        'dollars' => $dollars ?? null,
        'error'   => $error ?? false,
    ]);
});
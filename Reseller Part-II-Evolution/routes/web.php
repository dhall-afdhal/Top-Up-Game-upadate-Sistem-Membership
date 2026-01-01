<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $games = \App\Models\Game::with('products')->get();
    return view('welcome', compact('games'));
});

Route::get('/test-pricing', function () {
    $product = \App\Models\Product::first();
    $admin = \App\Models\User::where('email', 'admin@example.com')->first();
    $reseller = \App\Models\User::where('email', 'reseller@example.com')->first();
    $member = \App\Models\User::where('email', 'member@example.com')->first();

    return response()->json([
        'product' => $product->name,
        'normal_price' => number_format($product->price_normal),
        'admin_price' => number_format($admin->priceFor($product)),
        'reseller_price' => number_format($reseller->priceFor($product)),
        'member_price' => number_format($member->priceFor($product)),
    ]);
});

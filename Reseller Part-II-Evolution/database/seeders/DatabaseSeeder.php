<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin Account
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'balance' => 1000000,
            'password' => bcrypt('password'),
        ]);

        // Reseller Account
        User::factory()->create([
            'name' => 'Reseller User',
            'email' => 'reseller@example.com',
            'role' => 'reseller',
            'balance' => 500000,
            'password' => bcrypt('password'),
        ]);

        // Member Account
        User::factory()->create([
            'name' => 'Member User',
            'email' => 'member@example.com',
            'role' => 'member',
            'balance' => 0,
            'password' => bcrypt('password'),
        ]);

        // Seed Games and Products
        $mlbb = \App\Models\Game::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends',
            'brand' => 'Moonton',
            'image_url' => 'images/games/mlbb.png',
        ]);
        
        \App\Models\Product::create([
            'game_id' => $mlbb->id,
            'name' => '86 Diamonds',
            'price_normal' => 20000,
            'price_member' => 19500,
            'price_reseller' => 18500,
        ]);

        $pubg = \App\Models\Game::create([
            'name' => 'PUBG Mobile',
            'slug' => 'pubg-mobile',
            'brand' => 'Tencent',
            'image_url' => 'images/games/pubg.png',
        ]);

        \App\Models\Product::create([
            'game_id' => $pubg->id,
            'name' => '60 UC',
            'price_normal' => 15000,
            'price_member' => 14500,
            'price_reseller' => 13500,
        ]);
        
        $ff = \App\Models\Game::create([
            'name' => 'Free Fire',
            'slug' => 'free-fire',
            'brand' => 'Garena',
            'image_url' => 'images/games/freefire.png',
        ]);

        \App\Models\Product::create([
            'game_id' => $ff->id,
            'name' => '100 Diamonds',
            'price_normal' => 16000,
            'price_member' => 15500,
            'price_reseller' => 14000,
        ]);

        // Add more games as needed for UI demo
        \App\Models\Game::create(['name' => 'Roblox', 'slug' => 'roblox', 'brand' => 'Roblox Corp', 'image_url' => 'images/games/roblox.png']);
        \App\Models\Game::create(['name' => 'Magic Chess', 'slug' => 'magic-chess', 'brand' => 'Moonton', 'image_url' => 'images/games/magic_chess.png']);
        \App\Models\Game::create(['name' => 'Honor of Kings', 'slug' => 'honor-of-kings', 'brand' => 'Tencent', 'image_url' => 'images/games/mlbb.png']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** @use HasFactory<\Database\Factories\ProductFactory> */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'name', 'price_normal', 'price_member', 'price_reseller'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

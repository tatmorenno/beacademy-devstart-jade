<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ShoppingCart extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'shopping_cart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    
}

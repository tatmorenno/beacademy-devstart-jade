<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "addresses";

    protected $fillable = [
        'streetAddress',
        'postal_code',
        'city',
        'state',
        'country'
    ];
}

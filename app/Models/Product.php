<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    const ACTIVE = 1;
    use HasFactory;
    protected $guarded = [];

    protected function Image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset("images/$value"),
        );
    }
}

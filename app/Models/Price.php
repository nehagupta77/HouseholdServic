<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Price extends Model
{
    use HasFactory;
    protected $table = 'price';

    protected $fillable = [
        'price',
        'discount'
    ];

}


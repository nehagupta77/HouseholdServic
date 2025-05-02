<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Price extends Model
{
    use HasFactory;
    protected $table = 'price';

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    protected $fillable = [
        'price',
        'discount'
    ];

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    //join using one to many where one caterogy has many product
    public function products()
    {
        return $this->hasMany(product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\price;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    
    //join using one to one(belongsTo) where one product have one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relationship with price
    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    
   protected $guarded = ['id'];
}

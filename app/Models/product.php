<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\price;  
use App\Models\User;  

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
        return $this->hasOne(Price::class, 'product_id', 'id');
    }

    public function wishlistedBy()
{
    return $this->belongsToMany(User::class, 'wishlist')->withTimestamps();
}

    
   protected $guarded = ['id'];
}

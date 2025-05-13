<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\price;  
use App\Models\User; 

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $guarded = ['id'];
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getInWishlistAttribute()
    {
        if (!auth()->check()) {
            return false;
        }

        return $this->wishlists()->where('user_id', auth()->id())->exists();
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}

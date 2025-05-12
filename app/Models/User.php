<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\product;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users'; // Explicitly specifying the table

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function wishlist()
    {
        return $this->belongsToMany(product::class, 'wishlist')->withTimestamps();
    }

//     $user->wishlist()->attach($productId);

// // Remove product
// $user->wishlist()->detach($productId);

// // Check if a product is wishlisted
// $user->wishlist->contains($productId);
}

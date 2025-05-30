<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;

    protected $fillable = [
    'full_name',
    'mobile',
    'address',
    'date',
    'time',
    'problem_description',
];
}

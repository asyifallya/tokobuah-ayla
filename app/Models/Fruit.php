<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    /**
     * fillable digunakan untuk menentukan kolom mana saja 
     * yang boleh diisi secara massal (Mass Assignment).
     */
    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'price', 
        'image', 
        'stock'
    ];
}
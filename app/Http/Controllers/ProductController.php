<?php

namespace App\Http\Controllers;

use App\Models\Fruit; // Pastikan baris ini ADA
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua data buah dari database
        $fruits = Fruit::all(); 
        
        // Kirim variabel $fruits ke folder products file index.blade.php
        return view('products.index', compact('fruits'));
    }
}
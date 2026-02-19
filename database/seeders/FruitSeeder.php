<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FruitSeeder extends Seeder
{
    
    public function run(): void
    {
        $fruits = [
            [
                'name' => 'Apel Fuji Premium',
                'description' => 'Apel Fuji manis, renyah, dan kaya akan vitamin.',
                'price' => 45000,
                'image' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXBlbHxlbnwwfHwwfHx8MA%3D%3D',
                'stock' => 30,
            ],
            [
                'name' => 'Jeruk Sunkist Fresh',
                'description' => 'Jeruk dengan kandungan air melimpah, sangat menyegarkan.',
                'price' => 32000,
                'image' => 'https://images.unsplash.com/photo-1582979512210-99b6a53386f9?w=500',
                'stock' => 40,
            ],
            [
                'name' => 'Alpukat Mentega',
                'description' => 'Alpukat pilihan dengan daging lembut dan tidak berserat.',
                'price' => 55000,
                'image' => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=500',
                'stock' => 15,
            ],
            [
                'name' => 'Pisang Cavendish',
                'description' => 'Pisang kualitas ekspor yang manis dan mengenyangkan.',
                'price' => 18000,
                'image' => 'https://plus.unsplash.com/premium_photo-1664527307725-362b589c406d?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGlzYW5nJTIwY2F2ZW5kaXNofGVufDB8fDB8fHww',
                'stock' => 50,
            ],
            [
                'name' => 'Stroberi Ciwidey',
                'description' => 'Stroberi segar merah merona dengan rasa manis-asam.',
                'price' => 28000,
                'image' => 'https://images.unsplash.com/photo-1722803672529-5a7a85728479?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c3RyYXdiZXJyeSUyMGNpd2lkZXl8ZW58MHx8MHx8fDA%3D',
                'stock' => 10,
            ],
            [
                'name' => 'Mangga Arum Manis',
                'description' => 'Mangga harum dengan daging tebal dan rasa sangat manis.',
                'price' => 38000,
                'image' => 'https://images.unsplash.com/photo-1553279768-865429fa0078?w=500',
                'stock' => 20,
            ],
        ];

        foreach ($fruits as $fruit) {
            Fruit::create([
                'name'        => $fruit['name'],
                'slug'        => Str::slug($fruit['name']), // Otomatis buat slug dari nama
                'description' => $fruit['description'],
                'price'       => $fruit['price'],
                'image'       => $fruit['image'],
                'stock'       => $fruit['stock'],
            ]);
        }
    }
}
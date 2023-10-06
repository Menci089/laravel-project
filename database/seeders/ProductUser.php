<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'hotwheels',
            'code'=>'LedengAnakeSofi',
            'price'=>22000,
        ]);
        Product::create([
            'name'=>'fiesta',
            'code'=>'LedengAnakPungut',
            'price'=>20000,
        ]);
        Product::create([
            'name'=>'sgm',
            'code'=>'LedengAnakHytam',
            'price'=>43000,
        ]);
        Product::create([
            'name'=>'ganiermen',
            'code'=>'LedengAnakJalanan',
            'price'=>23800,
        ]);
        Product::create([
            'name'=>'corneto',
            'code'=>'LedengAnakSialan',
            'price'=>5000,
        ]);
    }
}

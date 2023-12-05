<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // delete old data from the table
        DB::table('product_details')->delete();

        DB::table('product_details')->insert([
            [
                'product_name' => 'Eco-friendly Steel Water Bottle',
                'product_description' => 'A reusable, BPA-free water bottle 2L, ideal for daily hydration.',
                'product_buy_price' => 8.00,
                'product_sell_price' => 12.00,
                'product_quantity' => 30,
            ],
            [
                'product_name' => 'BoAt Airdopes 131 Pro',
                'product_description' => 'Bluetooth-enabled earbuds with noise cancellation features.',
                'product_buy_price' => 45.00,
                'product_sell_price' => 70.00,
                'product_quantity' => 20,
            ],
            [
                'product_name' => 'Organic Hand Cream For Men',
                'product_description' => 'Natural hand cream made with organic ingredients for soft skin.',
                'product_buy_price' => 5.50,
                'product_sell_price' => 8.00,
                'product_quantity' => 50,
            ],
            [
                'product_name' => 'Eco-friendly Water Bottle 2L',
                'product_description' => 'A reusable, BPA-free water bottle, ideal for daily hydration.',
                'product_buy_price' => 8.00,
                'product_sell_price' => 12.00,
                'product_quantity' => 30,
            ],
            [
                'product_name' => 'LED Desk Lamp Light',
                'product_description' => 'Energy-efficient LED desk lamp with adjustable brightness.',
                'product_buy_price' => 15.00,
                'product_sell_price' => 25.00,
                'product_quantity' => 40,
            ],
            [
                'product_name' => 'Dell Wireless Bluetooth Keyboard',
                'product_description' => 'Wireless keyboard with Bluetooth connectivity and ergonomic design.',
                'product_buy_price' => 20.00,
                'product_sell_price' => 35.00,
                'product_quantity' => 25,
            ],
            [
                'product_name' => 'Yoga Mat Sheer',
                'product_description' => 'Eco-friendly, non-slip yoga mat for fitness and meditation.',
                'product_buy_price' => 10.00,
                'product_sell_price' => 18.00,
                'product_quantity' => 50,
            ],
            [
                'product_name' => 'Stainless Steel Kent Thermos',
                'product_description' => 'High-quality stainless steel thermos for hot and cold beverages.',
                'product_buy_price' => 12.00,
                'product_sell_price' => 20.00,
                'product_quantity' => 35,
            ],
            [
                'product_name' => 'Oriamo Portable Power Bank',
                'product_description' => 'Compact and portable power bank with high capacity for mobile devices.',
                'product_buy_price' => 18.00,
                'product_sell_price' => 30.00,
                'product_quantity' => 40,
            ],
            [
                'product_name' => 'Dell Wireless Mouse',
                'product_description' => 'Ergonomic wireless mouse with high precision and long battery life.',
                'product_buy_price' => 12.00,
                'product_sell_price' => 19.00,
                'product_quantity' => 45,
            ],
            [
                'product_name' => 'Smartphone Case 2.2',
                'product_description' => 'Durable and stylish smartphone case, compatible with various models.',
                'product_buy_price' => 5.00,
                'product_sell_price' => 10.00,
                'product_quantity' => 60,
            ],
            [
                'product_name' => 'Fitness Tracker',
                'product_description' => 'Advanced fitness tracker with heart rate and activity monitoring.',
                'product_buy_price' => 30.00,
                'product_sell_price' => 50.00,
                'product_quantity' => 25,
            ],
            [
                'product_name' => 'Travel Backpack',
                'product_description' => 'Lightweight and spacious travel backpack with multiple compartments.',
                'product_buy_price' => 25.00,
                'product_sell_price' => 40.00,
                'product_quantity' => 30,
            ],
            [
                'product_name' => 'Noise Cancelling Headphones',
                'product_description' => 'High-quality noise cancelling headphones for an immersive audio experience.',
                'product_buy_price' => 50.00,
                'product_sell_price' => 80.00,
                'product_quantity' => 20,
            ],
            [
                'product_name' => 'Digital Camera',
                'product_description' => 'Compact digital camera with high resolution and easy-to-use features.',
                'product_buy_price' => 80.00,
                'product_sell_price' => 120.00,
                'product_quantity' => 15,
            ],
            [
                'product_name' => 'Electric Toothbrush',
                'product_description' => 'Electric toothbrush with multiple brushing modes and long battery life.',
                'product_buy_price' => 22.00,
                'product_sell_price' => 35.00,
                'product_quantity' => 40,
            ],
            [
                'product_name' => 'Herbal Tea Assortment',
                'product_description' => 'Assortment of organic herbal teas for relaxation and health.',
                'product_buy_price' => 7.00,
                'product_sell_price' => 12.00,
                'product_quantity' => 50,
            ],
            [
                'product_name' => 'Smart Thermostat 6.3',
                'product_description' => 'Energy-saving smart thermostat with remote control and scheduling features.',
                'product_buy_price' => 60.00,
                'product_sell_price' => 100.00,
                'product_quantity' => 20,
            ],
            [
                'product_name' => 'Wireless Charger 4.5',
                'product_description' => 'Wireless charger with fast charging and multiple device compatibility.',
                'product_buy_price' => 15.00,
                'product_sell_price' => 25.00,
                'product_quantity' => 30,
            ],
            [
                'product_name' => 'Portable Bluetooth Speaker1.2',
                'product_description' => 'Portable Bluetooth speaker with high-quality sound and long battery life.',
                'product_buy_price' => 30.00,
                'product_sell_price' => 50.00,
                'product_quantity' => 25,
            ],
            [
                'product_name' => 'Smart LED Light Bulb 5.0',
                'product_description' => 'Smart LED light bulb with adjustable brightness and color temperature.',
                'product_buy_price' => 12.00,
                'product_sell_price' => 20.00,
                'product_quantity' => 35,
            ],
            [
                'product_name' => 'Wireless Charging Pad 2.0',
                'product_description' => 'Wireless charging pad with fast charging and multiple device compatibility.',
                'product_buy_price' => 15.00,
                'product_sell_price' => 25.00,
                'product_quantity' => 30,
            ],
            [
                'product_name' => 'Portable Bluetooth Speaker 2.0',
                'product_description' => 'Portable Bluetooth speaker with high-quality sound and long battery life.',
                'product_buy_price' => 30.00,
                'product_sell_price' => 50.00,
                'product_quantity' => 25,
            ],
            [
                'product_name' => 'Smart LED Light Bulb 2.0',
                'product_description' => 'Smart LED light bulb with adjustable brightness and color temperature.',
                'product_buy_price' => 12.00,
                'product_sell_price' => 20.00,
                'product_quantity' => 35,
            ],
            [
                'product_name' => 'Wireless Charging Pad 1.1',
                'product_description' => 'Wireless charging pad with fast charging and multiple device compatibility.',
                'product_buy_price' => 15.00,
                'product_sell_price' => 25.00,
                'product_quantity' => 30,
            ]
        ]);
    }

}



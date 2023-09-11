<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Donation::truncate();
        Donation::create([
            'category_id' => 1, 
                'name' => 'First package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 100,
                'image' => 'images\donation\package 4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Second package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 50,
                'image' => 'images\donation\package 5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Third package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 90,
                'image' => 'images\donation\package 1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Fourth package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 100,
                'image' => 'images\donation\package 3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Fifth package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 100,
                'image' => 'images\donation\package 10.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Sixth package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 100,
                'image' => 'images\donation\package 11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Seventh package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 120,
                'image' => 'images\donation\package 12.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 1, 
                'name' => 'Eighth package',
                'description' => 'This package contains: milk, rice, suger, floure, oil and meat',
                'price' => 100,
                'image' => 'images\donation\package 13.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        ///// daily meels start
        Donation::create([
            'category_id' => 2, 
                'name' => 'First meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 100,
                'image' => 'images\donation\daily 1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Second meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 50,
                'image' => 'images\donation\daily 2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Third meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 90,
                'image' => 'images\donation\daily 3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Fourth meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 100,
                'image' => 'images\donation\daily 4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Fifth meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 100,
                'image' => 'images\donation\daily 5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Sixth meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 100,
                'image' => 'images\donation\daily 6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        
        Donation::create([
            'category_id' => 2, 
                'name' => 'Seventh meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 100,
                'image' => 'images\donation\daily 1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 2, 
                'name' => 'Eighth meal',
                'description' => 'This meal contains rice and chicken, for one person',
                'price' => 50,
                'image' => 'images\donation\daily 2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        ///// coupons start
        Donation::create([
            'category_id' => 3, 
                'name' => 'First coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 2,
                'image' => 'images\donation\restu 1.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Second coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 3,
                'image' => 'images\donation\restu 2.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Third coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 5,
                'image' => 'images\donation\restu 3.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Fourth coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 3,
                'image' => 'images\donation\restu 4.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Fifth coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 4,
                'image' => 'images\donation\restu 5.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Sixth coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 6,
                'image' => 'images\donation\restu 6.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        
        Donation::create([
            'category_id' => 3, 
                'name' => 'Seventh coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 3,
                'image' => 'images\donation\restu 7.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Eighth coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 4,
                'image' => 'images\donation\restu 8.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        Donation::create([
            'category_id' => 3, 
                'name' => 'Ninth coupon',
                'description' => 'The restaurant distributes these special coupons to customers through various channels',
                'price' => 6,
                'image' => 'images\donation\restu 9.png',
                'created_at' => now(),
                'updated_at' => now(),
        ]);


    }
}

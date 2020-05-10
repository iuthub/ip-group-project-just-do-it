<?php

use App\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        National food
        $food = new Food([
            'category' => 'National food',
            'name' => 'Palov',
            'price' => 20000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'National food',
            'name' => 'Samarkand osh',
            'price' => 18000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'National food',
            'name' => 'Mastava',
            'price' => 12000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'National food',
            'name' => 'Moshxo`rda',
            'price' => 12000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'National food',
            'name' => 'Lag`mon sho`rva',
            'price' => 14000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'National food',
            'name' => 'Lag`mon qovurilgan',
            'price' => 14000
        ]);
        $food->save();

//        Meat food
        $food = new Food([
            'category' => 'Meat food',
            'name' => 'Qiyma shashlik',
            'price' => 5000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Meat food',
            'name' => 'Jazz shashlik',
            'price' => 6000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Meat food',
            'name' => 'Tovuq shashlik',
            'price' => 5000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Meat food',
            'name' => 'Stek',
            'price' => 8000
        ]);
        $food->save();

//        Fast food
        $food = new Food([
            'category' => 'Fast food',
            'name' => 'Burger',
            'price' => 15000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Fast food',
            'name' => 'Lavash',
            'price' => 15000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Fast food',
            'name' => 'Sezar burger',
            'price' => 16000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Fast food',
            'name' => 'Longer',
            'price' => 15000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Fast food',
            'name' => 'Hotdog',
            'price' => 13000
        ]);
        $food->save();

//        Sea food
        $food = new Food([
            'category' => 'Seafood',
            'name' => 'Cod',
            'price' => 19000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Seafood',
            'name' => 'Salmon',
            'price' => 21000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Seafood',
            'name' => 'Trout',
            'price' => 19000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Seafood',
            'name' => 'Tuna',
            'price' => 20000
        ]);
        $food->save();
//        Salads
        $food = new Food([
            'category' => 'Salads',
            'name' => 'Chicken salad',
            'price' => 12000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Salads',
            'name' => 'Olivier',
            'price' => 10000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Salads',
            'name' => 'BBQ potato salad',
            'price' => 11000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Salads',
            'name' => 'Shakarop',
            'price' => 9000
        ]);
        $food->save();
//        Dessert
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Charlotte',
            'price' => 7000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Napaleon',
            'price' => 8000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Black bun',
            'price' => 8000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Biscotti',
            'price' => 9000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Boconotto',
            'price' => 10000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Dessert',
            'name' => 'Egg tart',
            'price' => 9000
        ]);
        $food->save();
//        Drinks
        $food = new Food([
            'category' => 'Drinks',
            'name' => 'Coca Cola 0.25L',
            'price' => 10000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Drinks',
            'name' => 'Fanta 0.25L',
            'price' => 10000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Drinks',
            'name' => 'Tea',
            'price' => 7000
        ]);
        $food->save();
        $food = new Food([
            'category' => 'Drinks',
            'name' => 'Coffee',
            'price' => 9000
        ]);
        $food->save();
    }
}

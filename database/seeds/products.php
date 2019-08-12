<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('products')->insert([
//            'user_id' => 3,
//            'category_id' => 2,
//            'product_type' => 1,
//            'product_name' => 'Baked Beans',
//            'product_descri' => 'Baked Beans',
//            'price' => 50,
//            'is_approved' => 1,
//            'is_available' => 1,
//            'is_active' => 1,
//            'from_DateTime' => '26/07/2019 12:30',
//            'to_DateTime' => '30/07/2019 12:30',
//            'totalQuantity' => 5,
//            'quantityLeft' => 5,
//
//        ]); DB::table('products')->insert([
//        'user_id' => 3,
//        'category_id' => 2,
//        'product_type' => 1,
//        'product_name' => 'Waffles',
//        'product_descri' => 'Waffle',
//        'price' => 45,
//        'is_approved' => 1,
//        'is_available' => 1,
//        'is_active' => 1,
//        'from_DateTime' => '26/07/2019 12:30',
//        'to_DateTime' => '30/07/2019 12:30',
//        'totalQuantity' => 5,
//        'quantityLeft' => 5,
//
//    ]); DB::table('products')->insert([
//        'user_id' => 3,
//        'category_id' => 2,
//        'product_type' => 1,
//        'product_name' => 'Porridge',
//        'product_descri' => 'Porridge',
//        'price' => 100,
//        'is_approved' => 1,
//        'is_available' => 1,
//        'is_active' => 1,
//        'from_DateTime' => '26/07/2019 12:30',
//        'to_DateTime' => '30/07/2019 12:30',
//        'totalQuantity' => 5,
//        'quantityLeft' => 5,
//
//    ]); DB::table('products')->insert([
//        'user_id' => 3,
//        'category_id' => 2,
//        'product_type' => 1,
//        'product_name' => 'Baked Beans',
//        'product_descri' => 'Baked Beans',
//        'price' => 50,
//        'is_approved' => 1,
//        'is_available' => 1,
//        'is_active' => 1,
//        'from_DateTime' => '26/07/2019 12:30',
//        'to_DateTime' => '30/07/2019 12:30',
//        'totalQuantity' => 5,
//        'quantityLeft' => 5,
//
//    ]); DB::table('products')->insert([
//        'user_id' => 3,
//        'category_id' => 2,
//        'product_type' => 1,
//        'product_name' => 'SandWich',
//        'product_descri' => 'SandWich',
//        'price' => 35,
//        'is_approved' => 1,
//        'is_available' => 1,
//        'is_active' => 1,
//        'from_DateTime' => '26/07/2019 12:30',
//        'to_DateTime' => '30/07/2019 12:30',
//        'totalQuantity' => 5,
//        'quantityLeft' => 5,
//
//    ]); DB::table('products')->insert([
//        'user_id' => 3,
//        'category_id' => 2,
//        'product_type' => 1,
//        'product_name' => 'Egg Toast',
//        'product_descri' => 'Egg Toast',
//        'price' => 60,
//        'is_approved' => 1,
//        'is_available' => 1,
//        'is_active' => 1,
//        'from_DateTime' => '26/07/2019 12:30',
//        'to_DateTime' => '30/07/2019 12:30',
//        'totalQuantity' => 5,
//        'quantityLeft' => 5,
//
//    ]);
//
//
//
//        DB::table('products')->insert([
//            'user_id' => 3,
//            'category_id' => 2,
//            'product_type' => 2,
//            'product_name' => 'Bunny Chow',
//            'product_descri' => 'Bunny Chow',
//            'price' => 90,
//            'is_approved' => 1,
//            'is_available' => 1,
//            'is_active' => 1,
//            'from_DateTime' => '26/07/2019 12:30',
//            'to_DateTime' => '30/07/2019 12:30',
//            'totalQuantity' => 5,
//            'quantityLeft' => 5,
//
//        ]);



        //products

        DB::table('products')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'product_type' => 1,
            'product_name' => 'Baked Beans',
            'product_descri' => 'Baked Beans',
            'price' => 50,
            'is_approved' => 1,
            'is_available' => 1,
            'is_active' => 1,
            'from_DateTime' => '26/07/2019 12:30',
            'to_DateTime' => '30/07/2019 12:30',
            'totalQuantity' => 5,
            'quantityLeft' => 5,
            'productImage' => 'https://foodal.com/wp-content/uploads/2015/06/Vegetarian-Slow-Cooker-Baked-Beans-Recipe.jpg',

        ]); DB::table('products')->insert([
        'user_id' => 3,
        'category_id' => 2,
        'product_type' => 1,
        'product_name' => 'Waffles',
        'product_descri' => 'Waffle',
        'price' => 45,
        'is_approved' => 1,
        'is_available' => 1,
        'is_active' => 1,
        'from_DateTime' => '26/07/2019 12:30',
        'to_DateTime' => '30/07/2019 12:30',
        'totalQuantity' => 5,
        'quantityLeft' => 5,
        'productImage' => 'https://bakingamoment.com/wp-content/uploads/2018/07/IMG_9117-fluffy-buttermilk-waffles-from-scratch-video-thumbnail.jpg',

    ]); DB::table('products')->insert([
        'user_id' => 3,
        'category_id' => 2,
        'product_type' => 1,
        'product_name' => 'Porridge',
        'product_descri' => 'Porridge',
        'price' => 100,
        'is_approved' => 1,
        'is_available' => 1,
        'is_active' => 1,
        'from_DateTime' => '26/07/2019 12:30',
        'to_DateTime' => '30/07/2019 12:30',
        'totalQuantity' => 5,
        'quantityLeft' => 5,
        'productImage' => 'https://cdn.images.express.co.uk/img/dynamic/11/590x/Bowl-of-porridge-550811.jpg',

    ]); DB::table('products')->insert([
        'user_id' => 3,
        'category_id' => 2,
        'product_type' => 1,
        'product_name' => 'SandWich',
        'product_descri' => 'SandWich',
        'price' => 35,
        'is_approved' => 1,
        'is_available' => 1,
        'is_active' => 1,
        'from_DateTime' => '26/07/2019 12:30',
        'to_DateTime' => '30/07/2019 12:30',
        'totalQuantity' => 5,
        'quantityLeft' => 5,
        'productImage' => 'https://realfood.tesco.com/media/images/RFO-1400x919-ChickenClubSandwich-0ee77c05-5a77-49ac-a3bd-4d45e3b4dca7-0-1400x919.jpg',

    ]); DB::table('products')->insert([
        'user_id' => 3,
        'category_id' => 2,
        'product_type' => 1,
        'product_name' => 'Egg Toast',
        'product_descri' => 'Egg Toast',
        'price' => 60,
        'is_approved' => 1,
        'is_available' => 1,
        'is_active' => 1,
        'from_DateTime' => '26/07/2019 12:30',
        'to_DateTime' => '30/07/2019 12:30',
        'totalQuantity' => 5,
        'quantityLeft' => 5,
        'productImage' => 'https://media.eggs.ca/assets/RecipePhotos/_resampled/FillWyIxMjgwIiwiNzIwIl0/Ricotta-Toast-with-Fried-Egg-CMS.jpg',

    ]);



        DB::table('products')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'product_type' => 2,
            'product_name' => 'Bunny Chow',
            'product_descri' => 'Bunny Chow',
            'price' => 90,
            'is_approved' => 1,
            'is_available' => 1,
            'is_active' => 1,
            'from_DateTime' => '26/07/2019 12:30',
            'to_DateTime' => '30/07/2019 12:30',
            'totalQuantity' => 5,
            'quantityLeft' => 5,
            'productImage' => '',

        ]);
        DB::table('products')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'product_type' => 1,
            'product_name' => 'SandWich',
            'product_descri' => 'SandWich',
            'price' => 35,
            'is_approved' => 1,
            'is_available' => 1,
            'is_active' => 1,
            'from_DateTime' => '26/07/2019 12:30',
            'to_DateTime' => '30/07/2019 12:30',
            'totalQuantity' => 5,
            'quantityLeft' => 5,
            'productImage' => '',

        ]);

    }
}

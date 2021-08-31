<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data =  [
        //     [
        //         'name' =>  'Dien Thoai',
        //         'image' => '/images/dien-thoai.jpg',
        //     ],
        //     [
        //         'name' =>  'Laptop',
        //         'image' => '/images/laptop.jpg',
        //     ],
        //     [
        //         'name' =>  'Tai nghe',
        //         'image' => '/images/tai-nghe.jpg',
        //     ],
        // ];

        // Category::insert($data);

        factory(Category::class, 10)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $data = array(
	        [
	            'name' => 'Platano',
	            'slug' => 'Platano',
	            'description' => str_random(100),
	            'color' => '#440022'
	            
	        ],
	        [
	            'name' => 'Yuca',
	            'slug' => 'Yuca',
	            'description' => str_random(100),
	            'color' => '#445500'
	            
	        ]
        );
        Category::insert($data);
    }
}

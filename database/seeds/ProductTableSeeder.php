<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Bollitos Platano Maduro',
				'slug' 			=> 'Bollitos-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'https://s-media-cache-ak0.pinimg.com/564x/78/0a/e3/780ae3ffc06b8109248978bd1a3e1f52.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Pastelon de Platano Maduro',
				'slug' 			=> 'Pastelon-de-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'https://i.ytimg.com/vi/-ZBRc9nAgJo/hqdefault.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
				[
				'name' 			=> 'Mangu de Platano Maduro',
				'slug' 			=> 'Mangu-de-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'http://cdn1.recetasgratis.net/es/images/8/1/6/img_mangu_dominicano_6618_600.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Mangu de Platano Verde',
				'slug' 			=> 'Mangu-de-Platano-Verde',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'http://cdn1.recetasgratis.net/es/images/8/1/6/img_mangu_dominicano_6618_600.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Bollitos de Yuca Rellenos de Carne',
				'slug' 			=> 'Bollitos-de-Yuca-Rellenos-de-Carne',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'http://www.cocinadominicana.com/wp-content/uploads/2011/01/DSC_2627_JPEG_JPEG.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Bollitos de Yuca Rellenos de Pollo',
				'slug' 			=> 'Bollitos-de-Yuca-Rellenos-de-Pollo',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'http://static.viagrupo.com/thumbs/snack_3_1_PNG_464x464.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Arepitas de Yuca',
				'slug' 			=> 'Arepitas-de-Yuca',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'https://rafatrujillo.files.wordpress.com/2012/03/img_5658-4.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Bollitos Platano Maduro',
				'slug' 			=> 'Bollitos-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'https://s-media-cache-ak0.pinimg.com/564x/78/0a/e3/780ae3ffc06b8109248978bd1a3e1f52.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Pastelon de Platano Maduro',
				'slug' 			=> 'Pastelon-de-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'https://i.ytimg.com/vi/-ZBRc9nAgJo/hqdefault.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
				[
				'name' 			=> 'Mangu de Platano Maduro',
				'slug' 			=> 'Mangu-de-Platano-Maduro',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'http://cdn1.recetasgratis.net/es/images/8/1/6/img_mangu_dominicano_6618_600.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Mangu de Platano Verde',
				'slug' 			=> 'Mangu-de-Platano-Verde',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 15.00,
				'image' 		=> 'http://cdn1.recetasgratis.net/es/images/8/1/6/img_mangu_dominicano_6618_600.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Bollitos de Yuca Rellenos de Carne',
				'slug' 			=> 'Bollitos-de-Yuca-Rellenos-de-Carne',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'http://www.cocinadominicana.com/wp-content/uploads/2011/01/DSC_2627_JPEG_JPEG.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Bollitos de Yuca Rellenos de Pollo',
				'slug' 			=> 'Bollitos-de-Yuca-Rellenos-de-Pollo',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'http://static.viagrupo.com/thumbs/snack_3_1_PNG_464x464.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Arepitas de Yuca',
				'slug' 			=> 'Arepitas-de-Yuca',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 5.00,
				'image' 		=> 'https://rafatrujillo.files.wordpress.com/2012/03/img_5658-4.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			]
		);

		Product::insert($data);
    }
}

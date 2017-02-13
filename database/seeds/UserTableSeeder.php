<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
				'name' 		=> 'Hector', 
				'last_name' => 'Galindez', 
				'email' 	=> 'hectorgalindez02@gmail.com', 
				'user' 		=> 'donelias',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Juan de los Morros',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Elias', 
				'last_name' => 'Mercedes', 
				'email' 	=> 'eliasmercedes@gmail.com', 
				'user' 		=> 'elias02',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}

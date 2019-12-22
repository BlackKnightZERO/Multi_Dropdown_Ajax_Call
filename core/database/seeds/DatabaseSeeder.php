<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table('divisions')->insert([
        	array('id' => '1','name' => 'Chattagram','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '2','name' => 'Rajshahi','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '3','name' => 'Khulna','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '4','name' => 'Barisal','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '5','name' => 'Sylhet','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '6','name' => 'Dhaka','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '7','name' => 'Rangpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
        	  array('id' => '8','name' => 'Mymensingh','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"))
        ]);

        DB::table('districts')->insert([
        	 array('id' => '1','parent_id' => '1','name' => 'Comilla','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '2','parent_id' => '1','name' => 'Feni','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '3','parent_id' => '1','name' => 'Brahmanbaria','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '4','parent_id' => '1','name' => 'Rangamati','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '5','parent_id' => '1','name' => 'Noakhali','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '6','parent_id' => '1','name' => 'Chandpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '7','parent_id' => '1','name' => 'Lakshmipur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '8','parent_id' => '1','name' => 'Chattogram','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '9','parent_id' => '1','name' => 'Coxsbazar','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '10','parent_id' => '1','name' => 'Khagrachhari','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '11','parent_id' => '1','name' => 'Bandarban','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '12','parent_id' => '2','name' => 'Sirajganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '13','parent_id' => '2','name' => 'Pabna','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '14','parent_id' => '2','name' => 'Bogura','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '15','parent_id' => '2','name' => 'Rajshahi','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '16','parent_id' => '2','name' => 'Natore','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '17','parent_id' => '2','name' => 'Joypurhat','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '18','parent_id' => '2','name' => 'Chapainawabganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '19','parent_id' => '2','name' => 'Naogaon','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '20','parent_id' => '3','name' => 'Jashore','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '21','parent_id' => '3','name' => 'Satkhira','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '22','parent_id' => '3','name' => 'Meherpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '23','parent_id' => '3','name' => 'Narail','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '24','parent_id' => '3','name' => 'Chuadanga','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '25','parent_id' => '3','name' => 'Kushtia','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '26','parent_id' => '3','name' => 'Magura','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '27','parent_id' => '3','name' => 'Khulna','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '28','parent_id' => '3','name' => 'Bagerhat','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '29','parent_id' => '3','name' => 'Jhenaidah','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '30','parent_id' => '4','name' => 'Jhalakathi','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '31','parent_id' => '4','name' => 'Patuakhali','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '32','parent_id' => '4','name' => 'Pirojpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '33','parent_id' => '4','name' => 'Barisal','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '34','parent_id' => '4','name' => 'Bhola','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '35','parent_id' => '4','name' => 'Barguna','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '36','parent_id' => '5','name' => 'Sylhet','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '37','parent_id' => '5','name' => 'Moulvibazar','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '38','parent_id' => '5','name' => 'Habiganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '39','parent_id' => '5','name' => 'Sunamganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '40','parent_id' => '6','name' => 'Narsingdi','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '41','parent_id' => '6','name' => 'Gazipur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '42','parent_id' => '6','name' => 'Shariatpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '43','parent_id' => '6','name' => 'Narayanganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '44','parent_id' => '6','name' => 'Tangail','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '45','parent_id' => '6','name' => 'Kishoreganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '46','parent_id' => '6','name' => 'Manikganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '47','parent_id' => '6','name' => 'Dhaka','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '48','parent_id' => '6','name' => 'Munshiganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '49','parent_id' => '6','name' => 'Rajbari','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '50','parent_id' => '6','name' => 'Madaripur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '51','parent_id' => '6','name' => 'Gopalganj','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '52','parent_id' => '6','name' => 'Faridpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '53','parent_id' => '7','name' => 'Panchagarh','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '54','parent_id' => '7','name' => 'Dinajpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '55','parent_id' => '7','name' => 'Lalmonirhat','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '56','parent_id' => '7','name' => 'Nilphamari','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '57','parent_id' => '7','name' => 'Gaibandha','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '58','parent_id' => '7','name' => 'Thakurgaon','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '59','parent_id' => '7','name' => 'Rangpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '60','parent_id' => '7','name' => 'Kurigram','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '61','parent_id' => '8','name' => 'Sherpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '62','parent_id' => '8','name' => 'Mymensingh','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '63','parent_id' => '8','name' => 'Jamalpur','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
			  array('id' => '64','parent_id' => '8','name' => 'Netrokona','phone_extesion' => rand(99,999), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"))
        ]);

    	factory(App\Thana::class, 500)->create();
    }
}

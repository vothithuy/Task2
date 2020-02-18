<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tbl_user')->insert([
                'first_name' => $faker->name,
                'last_name'=> $faker ->lastName                                  ,
                'email' => $faker->unique()->email,
                'phone' => $faker->e164PhoneNumber ,
                'password'=>$faker->password  ,
                'avatar'=>$faker->imageUrl(100),
            ]);
        }
    }
}
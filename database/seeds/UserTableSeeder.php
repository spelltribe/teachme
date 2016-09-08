<?php

use TeachMe\Entities\User;
use Faker\Generator;


class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return New User();
    }


    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
    	User::create([
    		'name' => 'Jorge Crespín',
    		'email' => 'jxcrespin@gmail.com',
    		'password' => bcrypt('0922vi//')

    	]);
    }

    public function getDummyData(Generator $faker, array $customValues = array() )
    {
        return [

                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret')
        ];
    }



}

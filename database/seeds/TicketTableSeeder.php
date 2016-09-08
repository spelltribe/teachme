<?php

use TeachMe\Entities\Ticket;
use Faker\Generator;


class TicketTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return New Ticket();
    }


    public function run()
    {
        $this->createMultiple(50);
    }

    public function getDummyData(Generator $faker, array $customValues = array() )
    {
        return [

            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open','open','closed']),
            'user_id' => $this->getRandom('User')->id           
        ];
    }



}

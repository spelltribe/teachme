<?php

use TeachMe\Entities\TicketComment;
use Faker\Generator;


class TicketCommentTableSeeder extends BaseSeeder
{

    // indica la cantida de registros que se van a crear
    protected $total = 250;

    public function getModel()
    {
        return New TicketComment();
    }


    public function getDummyData(Generator $faker, array $customValues = array() )
    {
        return [

            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment' => $faker->paragraph(),
            'link' => $faker->randomElement(['','',$faker->url])        
        ];
    }



}

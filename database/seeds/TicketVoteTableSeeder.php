<?php

use TeachMe\Entities\TicketVote;
use Faker\Generator;


class TicketVoteTableSeeder extends BaseSeeder
{

    // indica la cantida de registros que se van a crear
    protected $total = 250;

    public function getModel()
    {
        return New TicketVote();
    }


    public function getDummyData(Generator $faker, array $customValues = array() )
    {
        return [

            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id           
        ];
    }



}

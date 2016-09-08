<?php

use Illuminate\Database\Seeder;
use Faker\Generator;
Use Faker\Factory as Faker;

abstract class BaseSeeder extends Seeder
{


    protected function createMultiple($total, array $customValues = array() )
    {

    	for ($i=1; $i < $total; $i++) { 
    		
    		$this->create($customValues);
    	}
    }
    
    abstract public function getModel();

    abstract public function getDummyData(Generator $faker, array $customValues = array() );

    protected function create(array $customValues = array())
    {

        $values = $this->getDummyData(Faker::create(),$customValues);
        $values = array_merge($values,$customValues);
        return $this->getModel()->create($values);

    }

    protected function createFrom($seeder, array $customValues = array())
    {
        $seeder = new $seeder;
        return $seeder->create($customValues);
    }

    
}

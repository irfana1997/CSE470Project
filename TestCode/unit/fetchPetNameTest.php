<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class fetchPetNameTest extends TestCase {

  public function testPetName()
	{
    $petName = new \App\Models\fetchPetName;
    $petName->setPetName('Dog');
    $this->assertEquals($petName->getPetName(),'Dog');
	}

}

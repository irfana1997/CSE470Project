<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class FetchProductCompanyTest extends TestCase {

  public function testProductCompany()
	{
    $companyName = new \App\Models\fetchProductCompany;
    $companyName->setCompanyName('Whiskas');
    $this->assertEquals($companyName->getComapanyName(),'Whiskas');
	}

}

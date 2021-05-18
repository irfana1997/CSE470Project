<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class FetchProductNameTest extends TestCase {

  public function testProductName()
	{
    $productName = new \App\Models\fetchProductName;
    $productName->setProductName('Cat Food');
    $this->assertEquals($productName->getProductName(),'Cat Food');
	}

}

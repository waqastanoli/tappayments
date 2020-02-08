<?php
use PHPUnit\Framework\TestCase;
use TapPayments\GoSell;

class GoSellTest extends TestCase{
	public function testSetPrivateKey(){
		GoSell::setPrivateKey("sk_test_XKokBfNWv6FIYuTMg5sLPjhJ");
		
		$this->assertEquals(
            GoSell::$privateKey,
            "sk_test_XKokBfNWv6FIYuTMg5sLPjhJ"
        );
	}
}
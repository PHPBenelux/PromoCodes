<?php

require_once 'PromoCode.php';
require_once 'PHPUnit/Framework/TestCase.php';

class PromoCodeTest extends PHPUnit_Framework_TestCase
{
    public function testGeneratPromoCode()
    {
        $pc = new PromoCode();
        $pc->generate(10);
        $this->assertSame(10, count($pc), 'Not matching count of codes');
        foreach ($pc->getCodes() as $code) {
            $this->assertSame(10, strlen($code), 'Not matching code length');
        }
    }
}

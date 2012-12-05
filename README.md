PromoCode
=========

PromoCode is a generator for quickly generating promo codes. Clean, quick and simple.

Usage
-----

    <?php
    
    require_once 'PromoCode.php';
    
    $promoCode = new PromoCode();
    $promoCode->generate(10);
    echo implode(PHP_EOL, $promoCode->getCodes());
    
This code will generate a list of 10 promo codes you can use for whatever you might need them.

Complete with unit test
<?php
$price = $_POST["price"];
//echo $price;
$discountPercent = $_POST["discountPercent"];
//echo $discountPercent;
function calculatorDiscount($price, $discountPercent)
{
    $discountAmount = $price * $discountPercent * 0.1;
    echo "Discount amount: " . $discountAmount."$<br>";
    $discountPrice = $discountAmount - $price;
    echo "Discount price: " . $discountPrice . "$<br>";
}

calculatorDiscount($price, $discountPercent);


?>
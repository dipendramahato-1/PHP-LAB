<!-- A store offers a product at $50. Apply the following operation:
-Add 20% tax (use arithmetic and assignment operator)
-Apply a 15% discount (use +=)
-Add $5 shipping fee(use +=)
Write a php script to calulate the final price step by step and display each stage -->


<?php
    // initial price is $50;
    $price = 50;
    echo "Intial price is $$price.<br>";

    // 1. Adding 20% tax
    $price = $price + ($price*0.2);
    echo "After 20% tax: $$price<br>";

    // 2. Applying a 15% discount
    $price *= 0.85;
    echo "After 15% discount: $$price<br>";

    // 3. Add $5 shipping fee
    $price += 5;
    echo "Final price adding shipping fee is : $$price";


?>
<!-- A customer receives 25% discount if purchase amount is above 20k. 15% discount if purchase amount is
 10k, 5% dicount otherwise. Premium members get an extra 5 % discount , total discont cannot be
  exceed 30%. Write a php program that calculates the final discount and final payable amount -->

 <?php
    $purchaseAmount = 22000;   
    $isPremium = true;         

    $discountPercent = 0;


    if ($purchaseAmount > 20000) {
        $discountPercent = 25;
    }
    
    else if ($purchaseAmount >= 10000) {
        $discountPercent = 15;
    }
    
    else {
        $discountPercent = 5;
    }


    if ($isPremium) {
        $discountPercent += 5;
    }

    
    if ($discountPercent > 30) {
        $discountPercent = 30;
    }

    
    $discountAmount = ($purchaseAmount * $discountPercent) / 100;
    $finalPayable = $purchaseAmount - $discountAmount;

    echo "Purchase Amount: Rs. " . $purchaseAmount . "<br>";
    echo "Final Discount: " . $discountPercent . "%<br>";
    echo "Discount Amount: Rs. " . $discountAmount . "<br>";
    echo "Final Payable Amount: Rs. " . $finalPayable;
?>

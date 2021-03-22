<?php
    declare(strict_types=1);
    /*
        1) Make a function getDiscountedPrice()
        2) Pass Price and Discount percentage
        3) Return the discountedPrice
        Formula:
        discounted_price = original_price - ( (original_price * discount) / 100 )
    */

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Discount Price </title>
    </head>
    <body>
        <h1> Make Discount price </h1>
        <form method='get' action='' >
            <input type='text' name='price' value='<?php echo $_GET['price']; ?>' placeholder='Enter your price' />
            <input type='text' name='discount' value='<?php echo $_GET['discount']; ?>' placeholder='Enter your discount number' />
            <input type='submit' name='submit' value='Get Real Price' />
        </form>
        <?php
            // declare(strict_types=1);
            function getDiscountedPrice($price, $discount = 5): int{
                $get_new_price = $price - ($price * $discount / 100);
                return $get_new_price;
            }
            if (isset($_GET['submit'])){
                $price = $_GET['price'];
                $discount = $_GET['discount'];
                echo "My Original Price: ".getDiscountedPrice($price, $discount);
            }

        ?>
    </body>
</html>
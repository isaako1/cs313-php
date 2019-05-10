<?PHP
session_start();

/*
pre_r($_SESSION);

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
**/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation page</title>
</head>
<body>

<div class="container">
    <div style="clear:both"></div>
    <br/>
    <div>
<h1>Thank you your purchase</h1>



    </div>

    <div>
        <div style="clear:both"></div>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <tr><th colspan="5"><h3>Order Details</h3></th> </tr>
                <tr>
                    <th width="40%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                if(!empty($_SESSION['shopping_cart'])):

                    $total = 0;
                    foreach ($_SESSION['shopping_cart'] as $key => $product):
                        ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td>$ <?php echo $product['price']; ?></td>
                            <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?> </td>
                            <td><a href="viewcart.php?action=delete&id=<?php echo $product['id']; ?> ">
                                    <div class="btn-danger" id="remove">Remove</div>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $total = $total + ($product['quantity'] * $product['price']);
                    endforeach;
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <?php
                            if (isset($_SESSION['shopping_cart'])):
                                if (count($_SESSION['shopping_cart'])> 0):
                                    ?>
                                    <a href="confirmation%20page.php" class="button">Checkout</a>
                                <?php endif; endif; ?>
                        </td>
                    </tr>
                <?php
                endif;
                ?>
            </table>
        </div>
        <div>
            <p class="btn-warning btn btn-lg">
                <a href="03Prove.php">
                    Back to Search
                </a>
            </p>
        </div>
    </div>
</div>

</body>
</html>

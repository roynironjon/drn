<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap min css cdn link-->
    <title>cart design</title>
</head>
<body>
    
<?php
    include_once 'main_header.php';
?>
<section class="winter-header-section" style="padding-bottom:0px;">
    <div class="container">
        <div class="header">
            <a href="index.php"><i class="fa-solid fa-house"></i> home <i class="fa-solid fa-angle-right"></i></a>
            <p style="font-size:16px;">cart</p>
        </div>
        <div class="header-contnet">
            <h2>Cart</h2>
        </div>
        <section class="cart-section" style="padding-bottom:150px">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Price</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td callsaps=>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>                 
                </tbody>
            </table>
        </section>
    </div>
</section>
 
<!--arrial section end-->
<?php
    include_once 'main_footer.php';
?>
</body>
</html>

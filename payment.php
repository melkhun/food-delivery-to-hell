<html>
    <head>
    <title>G5T1-Restaurant</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#DAF7A6">
    

            <?php
            session_start();
                $_SESSION['location']= $_POST['location'];
                $quantity=$_POST['quantity'];
 
                for ( $i = 0; $i < 6; $i++) {
                    if ((int)$_POST['selection'] == (int)$_POST['food_id'][$i]){
                        $cart=array('food_id'=>$_POST['food_id'][$i],'food_name'=>$_POST['food_name'][$i], 'food_price'=>(float)$_POST['food_price'][$i], 'food_description'=>$_POST['food_description'][$i], 'quantity'=>(int)$_POST['quantity']);
                        $food_id=$_POST['food_id'][$i];
                        $food_name=$_POST['food_name'][$i];
                        $food_price=$_POST['food_price'][$i];
                        $food_description=$_POST['food_description'][$i];
                        
                    } 
                }
                $_SESSION['_cart']=$cart;
                

            ?>

<div class="jumbotron text-center" style="background-color:#DAF7A6">
<div class="container">

            <img src="snaktime_logo.png" class="img-fluid" style="width:20%">
            <hr class="my-4">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <p class="h2">Review Your Order</p>
                    <br>
                </div>
                <div class="col-lg-4"></div>
            </div>
            
                <table id="foodTable" class='table text-center' id='food-list'>
                    <tr>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                    </tr>
                    <?php
                    $total = (int)$quantity * (int)$food_price;
                    $_SESSION['total'] =$total; 
                        echo "
                            <tr>
                                <td>".$food_id."</td>
                                <td>".$food_name."</td>
                                <td>".$food_price."</td>
                                <td>".$food_description."</td>
                                <td>".$quantity."</td>
                                <td>".$total."</td>

                            </tr>";
                    
                    ?>
                
                
                    <form action= "https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                        
                        <input type="hidden" name="custom"  id="custom" value="">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="upload" value="1">
                        <input type="hidden" name="business" value="esmG5T1@ymail.com">
                        
                        <?php
                       
                            echo "
                            <div id = 'item_1' class = 'itemwrap'>
                            <input name = 'item_name_1' value = '" . $food_name. "' type = 'hidden'>
                            <input type='hidden' name='amount_1' value='" .$food_price."'> 
                            <input type='hidden' name='quantity_1' value='" . $quantity. "'> 
                            </div>";
                        
                        ?>
                        <input type="hidden" name="custom"  id="custom" value="">

                        <!-- need to change the following directy to the root directry-->
                        <input type="hidden" name="return" value="http:\\localhost\food-delivery-to-hell/add-order.php"> 
                        
                        
                        <input type="hidden" name="rm" value="2">
                        <input type="hidden" name="cbt" value="Return to The Store">
               
                                           
                        <input type="hidden" name="currency_code"  value="SGD">
                        <br>
                        <input type="image" src="https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/44_Yellow_CheckOut_Pill_Button.png" alt="Check out with PayPal" />

                        </form>

                
                </div>
            </div>

    </body>
</html>
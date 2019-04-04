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
    
    <body style="background-color:rgb(241, 241, 231)">

            <?php
                $cart = array();
                $count = 0;
                for ( $i = 0; $i < 3; $i++) {
                    if ((int)$_POST['Quantity'][$i] >0){
                        $cart[$count]=array('name'=>$_POST['food_name'][$i], 'price'=>(float)$_POST['food_price'][$i], 'description'=>$_POST['food_description'][$i], 'quantity'=>(int)$_POST['Quantity'][$i]);
                        $count+=1;
                    } 
                }
                $_SESSION['_cart']=$cart;
                

            ?>


        <div class="container">
        <div class="jumbotron text-center">
            <img src="snaktime_logo.png" class="img-fluid">
                <table id="foodTable" class='table text-center' id='food-list'>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Sub-Total</th>
                    </tr>
                    <?php
                        $total = 0;
                        $cart=$_SESSION['_cart'];
                        for ($i = 0 ; $i < sizeof($cart) ; $i++){
                            $sub_total = $cart[$i]['price']*$cart[$i]['quantity'];
                            $total = $total + $sub_total;
                            echo "
                                <tr>
                                    <td>" . $cart[$i]['name'] . "</td>
                                    <td>" . $cart[$i]['price'] . "</td>
                                    <td>" . $cart[$i]['description'] . "</td>
                                    <td>" . $cart[$i]['quantity'] . "</td>
                                    <td>" . $sub_total . "</td>
                                </tr>"
                                ;  
                            
                            }
                        echo "</table><br>";
                        echo "Total amount to be paid: $" . $total . "<br>";
                    ?>
                
                
                    <form action= "https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                        
                        <input type="hidden" name="custom"  id="custom" value="">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="upload" value="1">
                        <input type="hidden" name="business" value="esmG5T1@ymail.com">
                        
                        <?php
                        for ( $i = 0 ; $i < sizeof($_SESSION['_cart']) ; $i++ ){
                            echo "
                            <div id = 'item_" . ($i+1) . "' class = 'itemwrap'>
                            <input name = 'item_name_" . ($i+1) ."' value = '" . $cart[$i]['name'] . "' type = 'hidden'>
                            <input type='hidden' name='amount_". ($i+1) . "' value='" . $cart[$i]['price'] ."'> 
                            <input type='hidden' name='quantity_" . ($i+1) . "' value='" . $cart[$i]['quantity'] . "'> 
                            </div>";
                        }
                       
                        ?>
                        <input type="hidden" name="custom"  id="custom" value="">
                        <!-- need to change the foolowing directy to the root directry-->
                        <input type="hidden" name="return" value="http:\\localhost\food-delivery-to-hell/add-order.php"> 
                        <input type="hidden" name="rm" value="2">
                        <input type="hidden" name="cbt" value="Return to The Store">
               
                                           
                        <input type="hidden" name="currency_code"  value="SGD">
                        <input type="submit" height= "42" width ="200" name="submit" class="btn btn btn-success center-block" style="font-size : 30px; height: 100px; width:300px"></center>
                        </form>

                
                </div>
            </div>

    </body>
</html>
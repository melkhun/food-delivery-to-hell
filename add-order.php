 <!-- jQuery -->
 <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<?php
session_start();
$cart=$_SESSION['_cart'];
// echo $cart['food_id']."<br>";
// echo $cart['quantity']."<br>";
// echo $_SESSION['location']."<br>";
// echo $_SESSION['total']."<br>";

// $locaton = $_SESSION['location'];
// $total = $_SESSION['total'];

// As the team is unable to use javascript to call for the service as shown below, the team decided to use MySQL Query statement to post the order into the database.

$cus=000001;
$del=0;
$sta="open";


    $servername = 'localhost';
        $dbname = 'order';
        $username = 'root';
        $password = '';
        
        $port = 3306;
        $url  = "mysql:host=$servername;dbname=$dbname;port=$port";
 
        $pdo = new PDO($url, $username, $password);
            $sql = "insert into orders (customer_id , food_id, quantity,delivery_location, total_price, delivery_man_id, status)

            values (:customer_id , :food_id, :quantity, :delivery_location, :total_price, :delivery_man_id, :status)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':customer_id', $cus , PDO::PARAM_STR);
            $stmt->bindParam(':food_id', $cart['food_id'], PDO::PARAM_STR);
            $stmt->bindParam(':quantity', $cart['quantity'], PDO::PARAM_STR);
            $stmt->bindParam(':delivery_location', $_SESSION['location'], PDO::PARAM_STR);
            $stmt->bindParam(':total_price', $_SESSION['total'], PDO::PARAM_STR);
            $stmt->bindParam(':delivery_man_id', $del, PDO::PARAM_STR);
            $stmt->bindParam(':status', $sta, PDO::PARAM_STR);
            $isOk = $stmt->execute();
            $stmt->closeCursor();


            $stmt->closeCursor();
            $pdo=null;
        
?>


<!-- 
    <div id='data'></div>
     <input id='leggo' type='submit' name='submit' value='select'> --> 

    <!--<script>
    $(function () {


        var local = <?php //$locaton ?>;
        var total =  <?php  //$total ?>;
        var food_id = <?php //$cart['food_id'] ?>;
        var quantity = <?php //$cart['quantity'] ?>;

        var postIt = {
            "order_time":"2019-04-04T07:59:22.183Z" , 
            "customer_id":100001,
            "delivery_location":local,
            "total_price":total,
            "delivery_man_id":01,
            "status":"open",
            "food_id":food_id,
            "quantity":quantity
            };
            
        var joke = JSON.stringify(postIt);   
        var serviceURL = 'http://Jolly:8080/post_order';
        // As the team is unable to use javascript to call for the service, the team decided to use MySQL Query statement to post the order into the database. as shown above
      
        var joke = JSON.stringify(postIt);

        $.ajax({
        // datatype=JSON,
        // data: category,
        url:serviceURL,
        method:'POST',
        data:joke,
        dataType: "json",
        contentType:'application/json; charset=utf-8'
                
    })
 </script>-->




<?php
header("Location: track");
?>

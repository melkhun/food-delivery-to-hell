 <!-- jQuery -->
 <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<?php
session_start();
    $cart=$_SESSION['_cart'];
// echo $cart['food_id']."<br>";
// echo $cart['quantity']."<br>";
// echo $_SESSION['location']."<br>";
// echo $_SESSION['total']."<br>";
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
    <!-- <div id='data'></div>
     <input id='leggo' type='submit' name='submit' value='select'> -->

    <!-- <script>
    $(document).ready(function () {
        // Change serviceURL to your own
        var addItem ={};
        $("#leggo").click(function () {
        // for (var i = 0; i < <?php //echo $sizeofpost ?>; i++) {
        //     addItem.food_id=1;
        //     addItem.quantity=1;
        //     addItem.sub_total=1;
        // }
        var postIt = {}
            postIt.order_time = "2019-04-04T07:59:22.183Z";
            postIt.customer_id = 1;
            postIt.delivery_location = <?php //echo $_SESSION['location'] ?>;
            postIt.total_price = <?php //echo $_SESSION['total'] ?>;
            postIt.delivery_man_id = 0;
            postIt.status = "open";
            postIt.food_id = <?php //echo $cart['food_id'] ?>;
            postIt.quantity = <?php //echo $cart['quantity'] ?>;
            
        
        // console.log(postIt);
        // console.log(JSON.stringify(postIt))

        // var url = "http://Jolly:8080/post_order"
            // var joke = JSON.stringify();

        $.ajax({
        type: "POST",
        data: JSON.stringify(postIt),
        datatype=JSON,
        // data: category,
        url:"http://Jolly:8080/post_order",
        contentType: "application/json",
        success: function () {
          alert('done');
        },
        error: function (error) {
          alert('gone');
        });
        }})
         
    });
</script> -->




<?php
header("Location: track");
?>

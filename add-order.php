 <!-- jQuery -->
 <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<?php
session_start();
    $postCart = $_SESSION['postCart'];
    $sizeofpost = sizeof($postCart);
    $total_price=0;
    for ($i = 0 ; $i < sizeof($postCart) ; $i++){
        echo $postCart[$i]['food_id'] . "<br>";
        echo $postCart[$i]['quantity'] . "<br>";
        echo $postCart[$i]['sub_total'] . "<br>";
        $total_price = $total_price + $postCart[$i]['sub_total'];
    }

    // $dataToPost = array("order_time"=> "2019-04-04T07:59:22.183Z",
    // "customer_id" => 10001, 
    // "delivery_location"=> $_SESSION['location'],
    // "total_price"=> $total_price,
    // "delivery_man_id"=> 0,
    // "status"=> "open",
    // "add_order_items"=> $postCart);


    // echo "<div id='data' value='".$dataToPost."'></div>";
?>
     <div id='data'></div>
     <input id='leggo' type='submit' name='submit' value='select'>

    <script>
    $(document).ready(function () {
        // Change serviceURL to your own
        var addItem ={};
        $("#leggo").click(function () {
        for (var i = 0; i < <?php echo $sizeofpost ?>; i++) {
            addItem.food_id=1;
            addItem.quantity=1;
            addItem.sub_total=1;
        }
        // var postIt = {}
        //     postIt.order_time = "2019-04-04T07:59:22.183Z";
        //     postIt.customer_id = 10001;
        //     postIt.delivery_location = <?php echo $_SESSION['location'] ?>;
        //     postIt.total_price = <?php echo $total_price ?>;
        //     postIt.delivery_man_id = 0;
        //     postIt.status = "open";
        //     postIt.add_order_items= [addItem.food_id=1,
        //                             addItem.quantity=1,
        //                             addItem.sub_total=1];
        
        // console.log(postIt);
        console.log(JSON.stringify(postIt))

        // var url = "http://Jolly:8080/post_order"
            var joke = JSON.stringify(order_time:"2019-04-04T07:59:22.183Z" ,  customer_id : 10001, delivery_location = <?php echo $_SESSION['location'] ?>, total_price = <?php echo $total_price ?>
        delivery_man_id = 0 , status = "open" );

        $.ajax({
        type: "POST",
        data: JSON.stringify(joke,{add_order_items:addItem}),
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
</script>




<?php
//header("Location: track");
?>

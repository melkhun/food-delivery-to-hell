
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<?php
session_start();
    $postCart = $_SESSION['postCart'];

    $total_price=0;
    for ($i = 0 ; $i < sizeof($postCart) ; $i++){
        echo $postCart[$i]['food_id'] . "<br>";
        echo $postCart[$i]['quantity'] . "<br>";
        echo $postCart[$i]['sub_total'] . "<br>";
        $total_price = $total_price + $postCart[$i]['sub_total'];
    }

    $data = array("order_time"=> "2019-04-04T07:59:22.183Z",
    "customer_id" => 10001, 
    "delivery_location"=> $_SESSION['location'],
    "total_price"=> $total_price,
    "delivery_man_id"=> 0,
    "status"=> "open",
    "add_order_items"=> $postCart);



?>
    <div >


    <script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://Jolly:8080/post_order";
        var result = "";
        $.post(serviceURL, data,function (data) {
            var json = JSON.parse(data);
            eta = json.rows[0].elements[0].duration.text;
            $('#eta').append(eta);
        }) 
    });
</script>




<?php
//header("Location: track");
?>

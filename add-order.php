
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<?php
session_start();
    $postCart = $_SESSION['postCart'];

    for ($i = 0 ; $i < sizeof($postCart) ; $i++){
        echo $postCart[$i]['food_id'] . "<br>";
        echo $postCart[$i]['quantity'] . "<br>";
        echo $postCart[$i]['sub_total'] . "<br>";
    }

    $data = array("order_time"=> "2019-04-04T07:59:22.183Z",
    "customer_id" => 
    "delivery_location": "string",
    "total_price": 0,
    "delivery_man_id": 0,
    "status": "string",
    "add_order_items": [
      {
        "food_id": 0,
        "quantity": 0,
        "sub_total": 0
      }
    ]
  });





?>
    <script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "";
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

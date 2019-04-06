<!DOCTYPE html>
<html lang="en">   

<head>
    <title>G5T1-Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>            function func() {
                var window = window.open("http://Jolly:8080/get_order_updated/1", "width=1, height=1");

            }</script>
</head>
<?php
    // $getit=$_POST['joke'];

    // echo $getit

?>
<body style="background-color:#DAF7A6" >

        <div class="jumbotron text-center" style="background-color:#DAF7A6">
            <div class="container">
    
                <img src="snaktime_logo.png" class="img-fluid" style="width:20%">
                <p class="lead "><h3>You've confirmed the following order!<br> Please deliver it on time!</h3></p>
                <?php //echo $_POST['selection']+"1"?>
            </div>
        </div>
        <!-- <?php //echo $_POST['selection']."1"?> -->

        <!-- <script type="text/javascript" language="Javascript">window.open('http://www.example.com');</script> -->
        <script>

    window.onload.function () {
        // Change serviceURL to your own
        window.open("http://Jolly:8080/get_order_updated/"+<?php echo $_POST['selection']?>;, "_blank");
        // var serviceURL = "http://Jolly:8080/get_order_updated/"+<?php echo $_POST['selection']?>;
        // var eta = "";
        // $.get(serviceURL, function (data) {
            // var json = JSON.parse(data);
            // eta = json.rows[0].elements[0].duration.text;
            // $('#eta').append(eta);
        }) 
    });

</script>
</body>

</html>
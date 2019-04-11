<!DOCTYPE html>
<html lang="en">   

<head>
    <title>G5T1-Restaurant</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
</head>

<body style="background-color:#DAF7A6" >

    <div class="jumbotron text-center" style="background-color:#DAF7A6">
        <div class="container">
            <img src="snaktime_logo.png" class="img-fluid" style="width:20%">
            <p class="lead "><h3>You've confirmed the following order!<br> Please deliver it on time!</h3></p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script>
$(function () {

    var serviceURL = "http://Jolly:8080/get_order_updated/<?=$_POST['order_id'][0]?>";
        $.get(serviceURL, function (data) {
            console.log(data);
        }) 
});
</script>

</body>

</html>
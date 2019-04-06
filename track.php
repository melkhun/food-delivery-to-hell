<html>

<head>
    <title>G5T1-Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
</head>

<body style="background-color:#DAF7A6">

    <div class="jumbotron text-center" style="background-color:#DAF7A6">
        <div class="container">

            <img src="snaktime_logo.png" class="img-fluid" style="width:20%">
            <p class="lead "><strong>Waiting for your order?</strong></p>
            <hr class="my-4">

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <p class="lead">Arriving in...</p>
                    <p class="h1" id="eta"> </p>
                </div>
                <div class="col-lg-4"></div>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://Jolly:8084/track/1";
        var eta = "";
        $.get(serviceURL, function (data) {
            var json = JSON.parse(data);
            eta = json.rows[0].elements[0].duration.text;
            $('#eta').append(eta);
        }) 
    });
</script>

</body>
    



    
</html>




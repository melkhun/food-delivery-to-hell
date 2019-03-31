
<html>
<head>
    <title>G5T1-Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
</head>

<body>

    <div class="container">
        <div class="jumbotron text-center">
            <img src="snaktime_logo.png" class="img-fluid">
            <p class="lead ">Arriving in...</p>
                <p id="eta"> </p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://DESKTOP-VHQ8QDK:8080/track/1";
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




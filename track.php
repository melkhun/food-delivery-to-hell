
<html>
<head>
    <title>G5T1-Restaurant</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
</head>
<body>

    <h1>G5T1-Retstraunt</h1>
    <div class="col-md-6">
        <p id="eta">Arriving in: </p>
    </div>
<script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://DESKTOP-VHQ8QDK:8082/track/1";
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




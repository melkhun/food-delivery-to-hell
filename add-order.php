
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


<?php
header("Location: track");
?>

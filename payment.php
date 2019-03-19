<html>
    <head>
    <title>G5T1-Restaurant</title>

        <!-- HEAD
            This is where you put your jQuery, Bootstrap JS library imports
            -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:rgb(241, 241, 231)">
        <center>
            this will show all selected items. and the sub total <br>

            show total amount
        </center>
        <div class="container">
            <div class="row">
                <div class="jumbotron align-items-center justify-content-center col-md-offset-2 col-md-8">
                    <form role="form" id="Track" class="form" action="add-order.php" method="post">
                        <div class="form-group">
                            Enter Card Detail
                            <input class="form-control" type="text" name="Username" placeholder="Card Detail">
                        </div>
                        <center>
                            <button name="Track" type="submit" class="btn btn-primary center-block" style="font-size : 30px; height: 100px; width:300px">Confirm Payment &rarr; </button>
                        </center> 
                    </form>

                
                </div>
            </div>
        </div>
    </body>
</html>
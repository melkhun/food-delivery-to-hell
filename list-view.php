<html>


<head>
    <title>G5T1-Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>


<body>

    <div class="container">
        <div class="jumbotron text-center">
            <img src="snaktime_logo.png" class="img-fluid">
            <form id="Pay" class="form" action="payment.php" method="post"> 
                <table id="booksTable" class='table text-center' id='book-list'>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                    </tr>
                </table>
                <button name="pay" type="submit" class="btn btn btn-success center-block" style="font-size : 30px; height: 100px; width:300px">Confirm Order &rarr; </button>
            </form>
        </div>
    </div>

</body>
    
            


<script>
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://jolly:8080/food";
        var rows = "";
        $.get(serviceURL, function (data) {
            var foodList = data.food; //the arr is in data.Food of the JSON

            // for loop to setup each table row with obtained book data
            for (var i = 0; i < bookList.length; i++) {
                eachRow =
                    "<td>" + bookList[i].food_name + "</td>" +
                    "<td>" + bookList[i].food_price + "</td>" +
                    "<td>" + bookList[i].food_description + "</td>" +
                    '<td> <input type="text" name="Quantity[]" placeholder="Quantity"></td>'
                

                rows += "<tr>" + eachRow + "</tr>";
            }
            $('#booksTable').append(rows);
        }) 
    });
</script>

</html>



<html>
<title>G5T1-Restaurant</title>
<body>
    <center>

    <h1>G5T1-Retstraunt</h1>
    <div class="col-md-6">
    <form id="Pay" class="form" action="payment.php" method="post"> 
        <table id="booksTable" class='table table-striped' style="font-size:40px" id='book-list' border='1'>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Discription</th>
                <th>Quantity</th>
            </tr>
        </table>
    </div>
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

    <button name="pay" type="submit" class="btn btn-primary center-block" style="font-size : 30px; height: 100px; width:300px">Confirm Order &rarr; </button>
     
    </form>
</center>
</body>
    
            
</html>




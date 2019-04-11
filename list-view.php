<html>


<head>
    <title>G5T1-Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>

<body>
  
<body style="background-color:#DAF7A6">
    <div class="jumbotron text-center" style="background-color:#DAF7A6">
        <div class="container">

            <img src="snaktime_logo.png" class="img-fluid" style="width:20%">
            <p class="lead "><strong>Welcome to G5T1's Restaurant</strong></p>


            <form id="Pay" class="form" action="payment.php" method="post"> 
            <label for="location">Location</label>
                <input type='text' name='location' placeholder=' Input Location'><br>
                <input type='text' name='quantity' placeholder='Enter Quantity'><br>
                <table id="foodTable" class='table text-center' id='food-list'>
                    <tr>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Description</th>

                        <th>select</th>
                    </tr>
                </table>
                
                <button name="submit" type="submit" class="btn btn btn-success center-block">Confirm Order &rarr; </button>
                <div class="col-lg-4"></div>
            </form>
        </div>
    </div>

<script >
    $(function () {
        // Change serviceURL to your own
        var serviceURL = "http://Jolly:8081/food";
        var rows = "";
        $.get(serviceURL, function (data) {
            var foodList = data.Food; //the arr is in data.Food of the JSON
            // 
            
            // for loop to setup each table row with obtained book data
            for (var i = 0; i < foodList.length; i++) {
                eachRow =
                    "<td>" + foodList[i].food_id + "<input type='hidden' name='food_id[]'  value='" + foodList[i].food_id + "'></td>" +
                    "<td>" + foodList[i].food_name + "<input type='hidden' name='food_name[]'  value='" + foodList[i].food_name + "'></td>" +
                    "<td>" + foodList[i].food_price + "<input type='hidden' name='food_price[]'  value='" + foodList[i].food_price + "'></td>" +
                    "<td>" + foodList[i].food_description + "<input type='hidden' name='food_description[]'  value='" + foodList[i].food_description + "'></td>" +
                    "<td> <input type='radio' name='selection' value='"+foodList[i].food_id+"' ></td>"
                    
                

                rows += "<tr>" + eachRow + "</tr>";
               
            }
            $('#foodTable').append(rows);
            return foodList;
        }) 
        
    });
</script>

</body>
</html>



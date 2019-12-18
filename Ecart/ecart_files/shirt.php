<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/shirt.css">
  <title>Hello, world!</title>

  <script src="jquery-3.4.1.min.js"></script>
<!-- <script>
$(document).ready(function(){
              $("#Detailspage").click( function(){

                var myURL = "http://localhost:8080/BankPortal/NewAccount";
                
                var obj = {
                    "customername" : $("#name").val(),
                    "accounttype" : $("#acctype").val(),
                    "balance" : $("#balance").val()
                }
              
                // $.get(myURL, callback, xhr, datatype);
               $.post(myURL);
   

              });
          });
</script> -->
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <img src="shirt2.jpg">
        <p id="name"><b><i>Aramani blue</i></b></p>
        <p id="price"><b>RS.30000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary" onclick="window.location.href='../ecart_files/shirt1.php?pid=1'">Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt3.jpg">
        <p id="name"><b><i>John-Player</i></b></p>
        <p id="price"><b>RS.20000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button id="Detailspage" class="btn btn-primary">Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt4.jpg">
        <p id="name"><b><i>Levis</i></b></p>
        <p id="price"><b>RS.21000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary">Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt5.jpg">
        <p id="name"><b><i>Levis</i></b></p>
        <p id="price"><b>RS.21000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary">Details</button>
      </div>

    </div>
    <div class="row">
      <div class="col-sm">
        <img src="shirt6.jpg">
        <p id="name"><b><i>Killer</i></b></p>
        <p id="price"><b>RS.10000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary" >Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt8.jpg">
        <p id="name"><b><i>Peter England</i></b></p>
        <p id="price"><b>RS.50000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary">Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt7.jpg">
        <p id="name"><b><i>Blackberry</i></b></p>
        <p id="price"><b>RS.8000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary">Details</button>
      </div>
      <div class="col-sm">
        <img src="shirt9.jpg">
        <p id="name"><b><i>Levis</i></b></p>
        <p id="price"><b>RS.21000/-</b></p>
        <button class="btn btn-primary">Add to cart</button>
        <button class="btn btn-primary">Details</button>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
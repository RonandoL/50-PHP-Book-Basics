<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Passing Arguments</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Passing Arguments</h4>

          <?php
              $number = 5;
              function square($number) {
                  $result = $number * $number;
                  echo "$number Squared = $result<br>";
              }

              function cube($number) {
                  $result = $number * $number * $number;
                  echo "$number Cubed = $result<br>";
              }

              square(3);
              cube(4);
              square($number);
              cube($number);


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

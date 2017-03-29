<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Breaking from Loops</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Breaking from Loops</h4>

          <?php
          // 'break' keyword to prematurely terminate a loop when a condition is met
          // 'continue' keyword used to skp a single iteration of a loop when a condition is met. When the test returns TRUE, the single iteration ends.
              for ($i=1; $i <= 4; $i++) {
                for ($j=1; $j <= 4; $j++) {
                  if ($i == 1 && $j == 1) {
                    echo "Continues inner loop when i = $i and j = $j <br>";
                    continue;
                  }
                  if ($i == 2 && $j == 3) {
                    echo "<b>Breaks inner loop when i = $i and j = $j </b><br>";
                    break;
                  }
                  echo "Running i = $i and j = $j <br>";
                }
              }


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

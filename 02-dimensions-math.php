<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>xxxxxxxx</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <?php

              $letters = ['A', 'B', 'C', 'D', 'E'];
              $numbers = [10, 9 , 8, 7, 6, 5];
              $matrix = ['LETTERS' => $letters, 'NUMBERS' => $numbers];

              echo "Start: {$matrix['LETTERS'][0]} ";

              foreach ($matrix as $word => $array) {
                echo '<ul>';
                foreach ($array as $key => $value) {
                  echo "<li> $word " . "[$key] = $value</li>";
                }
                echo "</ul>";
              }

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

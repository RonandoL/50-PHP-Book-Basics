<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Math</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>LOGICAL OPERATORS</h4>
          <?php

              $yes = TRUE;
              $no = FALSE;

              $result = ($no && $no) ? 'True' : 'False';
                  echo "No AND No returns $result <br>";
              $result = ($yes && $no) ? 'True' : 'False';
                  echo "Yes AND No returns $result <br>";
              $result = ($yes && $yes) ? 'True' : 'False';
                  echo "Yes AND No returns $result <hr>";

              $result = ($no || $no) ? 'True' : 'False';
                  echo "No OR No returns $result <br>";
              $result = ($yes || $no) ? 'True' : 'False';
                  echo "Yes OR No returns $result <br>";
              $result = ($yes || $yes) ? 'True' : 'False';
                  echo "Yes OR Yes returns $result <br>";
              $result = (!$yes) ? 'True' : 'False';
                  echo "NOT Yes returns $result";


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

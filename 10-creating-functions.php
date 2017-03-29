<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Creating Functions</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Creating Functions</h4>

          <?php
              $result = 5 + 5;
              function square(){
                  $result = 5 * 5;
                  echo "Local Square Result = $result<br>";
              }

              function cube() {
                  $result = 5 * 5 * 5;
                  echo "Local Cube Result = $result<br>";
              }

              echo "Global Sum Result = $result<br>";
              // calling both local functions
              square();
              cube();


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Constants</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Constants</h4>

          <?php

              define('USER', 'Mike');
              echo "Hello, " . USER . "!";

              echo '<p>You are using <b>PHP version ' . PHP_VERSION . '</b></p>';
              echo '<h4>running on: ' . PHP_OS . '</h4>';

              


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

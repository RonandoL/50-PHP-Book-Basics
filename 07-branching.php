<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Branching</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Branching</h4>

          <?php

              if ( 4 > 2 ) {
                  echo 'Is 4 > 2?<br>';
                  echo '<p>Yes, 4 is greater than 2</p><br>';
              }

              if (( 4 > 2 ) && ( 8 > 4 )) {
                echo '<p>4 is greater than 2 and 8 is greater than 4</p><br>';
              }

              if ( 4 > 8 ) {
                echo '<p>4 is greater than 8</p><br>';
              } else {
                echo '<p>4 is less than 8</p><br>';
              }

              echo '<h4>Switch Branching:</h4>';
              $number = 2; $letter = 'B';

              echo 'Attempt to match integer value<br>';
              switch ($number) {
                case 1: echo 'Number is One<br>';
                  break;
                case 2: echo 'Number is Two<br><br>';
                  break;
                case 3: echo 'Number is Three<br>';
                  break;
                default:
                  echo 'Number is Unrecognized<br><br>';
              }

              echo 'Attempt to match character value<br>';
              switch ($letter) {
                case 'A': echo 'Letter is A<br>';
                  break;
                case 'B': echo 'Letter is B<br><br>';
                  break;
                case 'C': echo 'Letter is C<br>';
                  break;
                default:
                  echo 'Letter is Unrecognized<br>';
              }

              echo 'Attempt to match multiple integer values<br>';
              switch ($number) {
                case 0: case 1: case 2: echo 'Less than 3<br>';
                  break;
                default:
                  echo '3 or more, or less than zero';
                  break;
              }

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

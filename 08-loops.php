<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Loops</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Loops</h4>

          <?php
              for ($i=1; $i < 4; $i++) {
                echo "<dt>Outer loop iteration $i";

                for ($j=1; $j < 4; $j++) {
                  echo "<dd>Inner loop iteration $j";
                }
              }

              echo "<br><br><h3>Looping While True</h3>";
              echo "<p>Requires, Initializer, test-expression and incrementer.</p>";
              echo "<p>Initializer must appear before the start of the loop block.</p>";
              echo "<p>Test-Expression must appear in parenthesis after the <i>while</i> keyword.</p>";
              echo "<p>Followed by braces containing both incrementer and statements to be executed on each iteration.</p>";

              $number = [10, 20, 30];

              echo "<dt>While Loop: ";
              $i = 0;
              while ($i <3) {
                echo "<dd> Element $i = $number[$i]";
                $i++;
              }
              echo '<dt>Do While Loop:';
              $i = 0;
              do {
                echo "<dd>Element $i = $number[$i]";
                $i++;
              } while ($i < 3);

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

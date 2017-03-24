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
          <h4>Math</h4>
          <?php
              //  number_format() adds commas
              //  ?: Ternary Operator evaluates expression for a true or false
                // $var = (expression) ? if-TRUE-return-this-value : if-FALSE-return-this-value
              $zero = 0;
              $nil = 0;
              $one = 1;
              $upr = 'A';
              $lwr = 'a';
              $result = ($zero == $nil) ? 'True-brah' : 'Falsie Ma!';  // ?: Ternary Operator
                  echo "$zero == $nil is $result <br>";
              $result = ($zero == $one) ? 'Troo' : 'Falcif';
                  echo "$zero == $one is $result <br>";
              $result = ($upr == $lwr) ? 'Truthingk' : 'Falificat';
                  echo "$upr == $lwr is $result <br>";
              $result = ($upr != $lwr) ? 'Truthing' : 'Falsify';
                  echo "$upr != $lwr is $result <hr>";

              $result = ($one > $nil) ? 'True' : 'False';
                  echo "$one > $nil is $result <br>";

              $result = ($zero >= $nil) ? 'True' : 'False';
                  echo "$zero >= $nil is $result <br>";
              $result = ($one <= $nil) ? 'True' : 'False';
                  echo "$one <= $nil is $result <br>";

              echo "<hr>";
              $x = 34567890989;
              echo "$x and here it's number_formatted: " . number_format($x) . "<br>";

              $a = 4;
              $b = 8;
              $result = $a + $b;
              echo "Addition: $a + $b = $result <br>";

              $result = $b - $a;
              echo "Subtration: $b - $a = $result <br>";

              $result = $a * $b;
              echo "Multiplication: $a x $b = $result <br>";

              $result = $b / $a;
              echo "Division: $b/$a = $result <br>";

              $result = $a % $b;
              echo "Modulo: $a % $b = $result <br>";

              $a++;
              echo "Increment a: $a <br>";
              $b--;
              echo "Decrement b: $b <br>";

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

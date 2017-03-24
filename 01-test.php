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
              // implode() functon - converts array to string, inserts separator,
              // explode() - converts string to array
              // sort() - sorts by Value, discards original key even if Associative Array
              // asort() - sorts by Value, retains original key
              // ksort() - sorts by key

              $cars = ['Ford' => 'F-150', 'Honda' => 'Accord', 'Dodge' => 'Viper', 'Toyota' => 'Tercel', 'Chevy' => 'Camaro', 'Ford' => 'Mustang'];

              echo "cars : ";
              echo '<dl>
                  <dt>Original Element Order:
                      <dd>';
                      foreach ($cars as $key => $value) {
                        echo '&bull; ' . $key . ': ' . $value . '<br>';
                      }
              asort($cars);     // asort() - sorts by Value, retains original key
              echo '<dt>Sorted Into Value Order using asort():
                  <dd>';
                  foreach ($cars as $key => $value) {
                    echo '&bull; <b>' . $key . '</b>: ' . $value . '<br>';
                  }
              ksort($cars);     // ksort() - sorts by key
              echo '<dt>Sorted Into Key Order using ksort():
                  <dd>';
                  foreach ($cars as $key => $value) {
                    echo '&bull; <b>' . $key . '</b>: ' . $value . '<br>';
                  }


              echo "<hr>";

              // (x)rsort sorts in reverse order
              // rsort() - sorts by VALUE, discards original key
              // arsort() - sorts by VALUE, keeps original key
              // krsort() - sorts by KEY, keeps key

              $array = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $barray = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $karray = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $implode = implode('.. ', $array);
              $rsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];
              $arsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];
              $krsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];

              echo "array : ";
              print_r($array);
              echo "<br><br>";

              echo "sort <i>- (discards key)</i>: ";
              sort($array);
              print_r($array);
              echo "<br><br>";

              echo "asort <i>- (sorts on value)</i>: ";
              asort($barray);
              print_r($barray);
              echo "<br><br>";

              echo "ksort <i>- (sorts on key)</i>: ";
              ksort($karray);
              print_r($karray);
              echo "<br><br>";

              echo "rsort <i>- (sorts on value, drops key)</i>: ";
              rsort($rsort);
              print_r($rsort);
              echo "<br><br>";

              echo "arsort : ";
              arsort($arsort);
              print_r($arsort);
              echo "<br><br>";

              echo "krsort : ";
              krsort($krsort);
              print_r($krsort);
              echo "<br>";

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->

      <div class='row'>
          <div class='col-md-3'>
              <hr>

              <!-- TWIG STUFF GOES HERE -->

          </div>
      </div>  <!-- .row -->
    </div>  <!-- .container -->


  </body>
</html>

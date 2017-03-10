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
              // rsort() - sorts by VALUE, discards original key
              // arsort() - sorts by VALUE, keeps original key
              // krsort() - sorts by KEY, keeps key

              $cars = ['Dodge' => 'Viper', 'Chevy' => 'Camaro', 'Ford' => 'Mustang'];

              echo "cars : ";
              echo '<dl>
                  <dt>Original Element Order:
                      <dd>';
                      foreach ($cars as $key => $value) {
                        echo '&bull; ' . $key . ': ' . $value . '<br>';
                      }
              asort($cars);     // asort() - sorts by Value, retains original key
              echo '<dt>Sorted Into Value Order:
                  <dd>';
                  foreach ($cars as $key => $value) {
                    echo '&bull; ' . $key . ': ' . $value . '<br>';
                  }
              ksort($cars);     // ksort() - sorts by key
              echo '<dt>Sorted Into Key Order:
                  <dd>';
                  foreach ($cars as $key => $value) {
                    echo '&bull; ' . $key . ': ' . $value . '<br>';
                  }


              echo "<hr>";

              $array = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $barray = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $karray = ['rid' => 'red', 'blu' => 'blue', 'zap' => 'zeba', 'zed' => 'Zebra', 'red' => 'RED', 'blue' => 'BLUE', 'number' => 9999, 'girl' => 'Heather'];
              $implode = implode('.. ', $array);
              $rsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];
              $arsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];
              $krsort = ['nine' => 99, 'seven' => 77, 'bignumb' => 3027, 'zeb' => 'zebra', 'a' => 'apple', '3' => 3];

              echo "array : ";
              print_r($array);
              echo "<br>";

              echo "sort : ";
              sort($array);
              print_r($array);
              echo "<br>";

              echo "asort : ";
              asort($barray);
              print_r($barray);
              echo "<br>";

              echo "ksort : ";
              ksort($karray);
              print_r($karray);
              echo "<br>";

              echo "rsort : ";
              print_r($rsort);
              echo "<br>";

              echo "rsort : ";
              rsort($rsort);
              print_r($rsort);
              echo "<br>";

              echo "arsort : ";
              arsort($arsort);
              print_r($arsort);
              echo "<br>";

              echo "krsort : ";
              krsort($krsort);
              print_r($krsort);
              echo "<br>";

          ?>

          <!-- <form action='/tasks' method='post'>
            <div class='form-group'>
              <label for='task'>Enter xxxxxxxx</label>
              <input type='text' name='task' id='task' class='form-control' placeholder='Personal Slave'>
            </div>
            <button type='submit' class='btn btn-sm btn-primary'>Submit Task</button>
          </form>

          <br>
          <form action='/delete' method='post'>
            <button type='submit' class='btn btn-sm'>Delete All Tasks</button>
          </form> -->

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

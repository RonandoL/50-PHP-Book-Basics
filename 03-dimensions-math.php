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

              $girls = ['Sue', 'Mary', 'Karen', "Tami"];
              $boys = ['Ron', 'Bob', 'Karl', 'Stan'];
              $matrix = ['Girls' => $girls, 'Boys' => $boys];

              echo "Start: {$matrix['Girls'][0]}";

              foreach ($matrix as $kid => $names) {
                  echo "<ul>";
                  foreach ($names as $key => $value) {
                    echo "<li>$kid [$key] = $value</li>";
                  }
                  echo "</ul>";
              }

          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

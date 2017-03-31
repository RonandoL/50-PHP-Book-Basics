<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Returning Values</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Returning Values</h4>

          <?php
              date_default_timezone_set('UTC');
              $user = 'Mike';

              function display_date() {
                  return date('l, jS F Y');  // weekday, day w/Suffix (th), month name, year
              }

              function welcome($user) {
                  $hour = date('H');
                  $greeting = ($hour < 12) ? '<br>Good Morning ' : '<br>Good Day ';
                          // ternary operator - if true 'morning,' if false 'day'
                  $greeting .= $user;
                  return $greeting;
              }

              echo display_date();
              echo welcome($user);


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

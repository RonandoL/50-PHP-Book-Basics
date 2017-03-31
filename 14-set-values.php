<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Actions</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" map to lightbox css">  <!-- ADD THE 3 FOLDERS FROM LIGHTBOX TO VIEWS FOLDER -->
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <h4>Actions</h4>

          <form action="14-set-values.php" method="POST">
            <fieldset>
              <legend>What kind of language is PHP</legend>
                  Scripting <input type="radio" name="definition" value="Scripting"> <br>
                  Markup <input type="radio" name="definition" value="Markup"> <br>
                  Programming <input type="radio" name="definition" value="Programming">
            </fieldset><p><input type="submit"></p>
          </form>

          <?php
              // PHP ensures correct user input with isset() functions!
              // isset() takes a variable argument, returns TRUE ONLY if it's NOT NULL
              // Empty form fields are NULL unless the user has entered a value
              if (isset($_POST['definition'])) {
                $definition = $_POST['definition'];
              } else {
                $definition = NULL;
              }

              if ($definition != NULL) {
                  if ($definition != 'Scripting') {
                    echo "$definition is Incorrect";
                  } else {
                    echo "$definition is Correct";
                  }
              }
              else {
                echo 'You must select one answer';
              }
          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

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
          <form action="13-actions-forms.php" method="POST">
            <dl>
              <dt>Name:
                <dd><input type="text" name="name"></dd>
              </dt>
              <dt>Email Address:
                <dd><input type="text" name="email"></dd>
              </dt>
              <dt>Comments:
                <dd><textarea name="comment" rows="8" cols="20"></textarea>
                </dd>
              </dt>
            </dl>
            <p><input type="submit"></p>
          </form>

          <?php
              // form: PHP creates an array element named $_POST['xxxx']
              // containing the value entered into the form by the user

                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];

                if (!empty($name)) {
                    echo "<p>Thanks for this comment $name...</p>";
                    echo "<p><i>'$comment'</i></p>";
                    echo "<p>We will reply to $email</p>";
              }


          ?>



        </div>  <!-- .col-md-3 -->
      </div>  <!-- .row -->


    </div>  <!-- .container -->


  </body>
</html>

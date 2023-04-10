<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
          <a href="#" class="navbar-brand">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1571398888/Group_1514_tjekh3_zkts1c.svg" alt="logo"
              width="150"></a>
        </div>
      </nav>
    </header>

    <div class="container">
      <div>
        <div><img src="" alt=""></div>
        <h1>Welcome</h1>
        <p>Create a Register/Login </p>
        <p><a href="https://bootstrapious.com"><u>bootstrapious</u></a></p>
      </div>

      <form action="" id="register-form">
        <div>
          <p>Create an Account</p>

          <?php

          if (isset($error)) {
              foreach ($error as $e) { ?>
          <div class="alert alert-danger alert-dismissible col-md-10 ml-4 mt-1">
            <button type="button" class="close" data-dismiss='alert'>$times;</button>
            <?php echo $e;?>
          </div>
          <?php
              }
          } ?>
        </div>


        <div class="container">
          <div>
            <div class="form-group">
              <input type="text">
            </div>
            <div class="form-group">
              <input type="text">
            </div>

          </div>
        </div>
        <div><input type="text"></div>
        <div><input type="text"></div>
        <div><input type="text"></div>
        <div><input type="text"></div>
        <div><input type=""></div>
        <div>
          <p></p>
        </div>
      </form>


    </div>

  </div>


  <!--JQUERY-->
  <script src="//code.jquery.com/jquery-3.6.4.min.js"></script>
  <!--BOOSTRAP-->
  <script src="https://kit.fontawesome.com/aa362aafc6.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>

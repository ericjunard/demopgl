<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Pretty Good Look</title>
    <?php include ("header.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
  <section class="contact">
    <div class="container">
      <div class="row">
          <h2 class="text-center ">CONTACT</h2>
          <p class="text-center col-md-8 col-md-offset-2">
            Description  ipsum dolor sit amet soleat latine sit  amet soleat latine sit.ipsum dolor sit amet soleat
            latine sit  amet soleat latine sit.
          </p>
        <div class="col-md-5 content">
          <p class="bold">Email</p>
          <p>pretygoodlook@gmail.com</p>
          <p class="bold">Connect with us</p>
          <a href="#"><img src="dist/img/twitter-red.png"/></a>
          <a href="#"><img src="dist/img/google-plus-red.png"/></a>
        </div>
        <div class="col-md-7">
          <form action="email.php" method="POST">
            <div class="form-group">
            <label for="" > Name</label>
            <input type="text" class="form-control" name="name" value="" required>
            </div>
            <div class="form-group" >
            <label for=""> Phone Number </label>
            <input type="text" class="form-control" name="phone"  value="">
            </div>
            <div class="form-group">
            <label for="">Email Address</label>
            <input type="email" class="form-control" name="email"value="">
            </div>
            <label for=""> Message</label>
            <textarea   name="message" class="form-control"> </textarea>
            <div class="half-btn"><button type="submit" class="btn btn-primary " >Submit Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
    <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

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
  </head>
  <body>
  <section class="contact">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
          <h2 class="text-center ">REQUEST INVITE</h2>
          <p class="text-center ">
            Description  ipsum dolor sit amet soleat latine sit  amet soleat latine sit.ipsum dolor sit amet soleat
            latine sit  amet soleat latine sit.
          </p>
          <form action="email.php" method="POST">
            <div class="form-group">
            <label for="" > Name</label>
            <input type="text" class="form-control" name="name" value="" required>
            </div>
            <div class="form-group">
            <label for="">Email Address</label>
            <input type="email" class="form-control" name="email"value="">
            </div>
            <div class="half-btn"><button type="submit" class="btn btn-primary " >REQUEST INVITE</button></div>
          </form>
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

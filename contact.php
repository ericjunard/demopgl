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
          <a href="#" class="social_icon"><img src="dist/img/twitter-red.png"/></a>
          <a href="#" class="social_icon"><img src="dist/img/google-plus-red.png"/></a>
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
            <div class="half-btn"><button data-toggle="modal" data-target ="#contact-ty" type="submit" class="btn btn-primary " >Submit Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
    <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
      <div class="modal fade" id="contact-ty" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content col-md-8 col-md-offset-2">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title text-center brand" id="Heading">Thanks!</h4>
        </div>
        <div class="modal-body">
         <p>Your email has been successfully sent and we appreciate you for contacting us. We'll be in touch soon.</p>
        </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-primary">Back to browsing</button>
        </div>
        </div>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
</html>

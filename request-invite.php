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
            <div class="half-btn"><button data-toggle="modal" data-target="#request-ty" type="submit" class="btn btn-primary " >REQUEST INVITE</button></div>
          </form>
      </div>
    </div>
  </section>
    <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
        <div class="modal fade" id="request-ty" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content col-md-8 col-md-offset-2">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title text-center brand" id="Heading">Thanks!</h4>
        </div>
        <div class="modal-body">
         <p>Your invite request has been sent, now kickback and wait patiently for your code.</p>
         <p class="text-center">PrettyGoodLook is coming!</p>
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

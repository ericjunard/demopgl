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
          <h2 class="text-center ">WE LOVE TO HEAR YOUR FEEDBACK</h2>
          <p class="text-center ">
            Description  ipsum dolor sit amet soleat latine sit  amet soleat latine sit.ipsum dolor sit amet soleat
            latine sit  amet soleat latine sit.
          </p>
          <form action="email.php" method="POST">
            <div class="form-group">
              <label for="">Subject</label>
             <select class="form-control">
                <option>Please select</option>
                <option>User Flow </option>
                <option>Aesthetics</option>
             </select>
            </div>
            <div class="form-group">
            <label for=""> Message</label>
            <textarea   name="message" class="form-control" placeholder="Type your feedback here"> </textarea>
            </div>
          </form>
          <!--temporarily put this button outside the form just to show the modal-->
          <div class="half-btn"><button data-toggle="modal" data-target="#feedback-ty" type="submit" class="btn btn-primary " >SUBMIT FEEDBACK</button></div>
      </div>
    </div>
  </section>
  </body>
   <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <div class="modal fade" id="feedback-ty" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content col-md-8 col-md-offset-2">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title text-center brand" id="Heading">Thanks!</h4>
        </div>
        <div class="modal-body">
         <p>Your feedback has been sent, you have been a great help, now stick with us whilst we grow and improve.</p>
        </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-primary">Back to browsing</button>
        </div>
        </div>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
     <script src="dist/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
       
</html>

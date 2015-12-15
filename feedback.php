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
            <div class="half-btn"><button type="submit" class="btn btn-primary " >SUBMIT FEEDBACK</button></div>
          </form>
      </div>
    </div>
  </section>
    <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

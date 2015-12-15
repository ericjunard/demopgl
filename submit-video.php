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
  <section class="submit-video">
    <div class="container">
      <h1 class="">SUBMIT VIDEO</h1>
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
            </div>
             <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="email" class="form-control" >
            </div>
            <div class="form-group">
              <label>YouTube Channel</label>
              <input type="text" name="youtube-channel" class="form-control" >
            </div>
            <div class="form-group">
              <label>YouTube Title</label>
              <input type="text" name="youtube-title" class="form-control" >
            </div>
            <div class="form-group">
              <label>Video Description</label>
              <textarea type="text" name="video-description" class="form-control" ></textarea>
            </div>

          </div>
          <div class="col-md-6">
             <div class="form-group">
              <label>YouTube URL</label>
              <input type="text" name="youtube-url" class="form-control" >
            </div>
          <div class="form-group">
           <label>Categories</label>
              <input type="text" name="categories" class="form-control" placeholder ="Type categories">
          </div>
           <div class="form-group">
              <label>Products mentioned</label>
              <input type="text" name="product-url" class="form-control" placeholder="Paste product URL"/>
              <input type="text" name="product-url" class="form-control" placeholder="Paste product URL" ></input>
              <input type="text" name="product-url" class="form-control" placeholder="Paste product URL" ></input>
              <input type="text" name="product-url" class="form-control" placeholder="Paste product URL" ></input>
              <div class="pull-right">
               <p class="btn bold"> Add <span class="glyphicon glyphicon-plus "></span></p>
              </div>
            </div>
            <div class="half-btn ">
              <input type="submit" class="btn btn-primary" value="SUBMIT">
            </div>
          </div>
         
        </div>
      </form>
    </div>
    
  </section>
    <?php include ("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

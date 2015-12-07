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
  <div class="container">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="main">
  <div id="wrapper" class="sidebar">
    <div id="sidebar">
      <div class="element" data-slide-id="0">a
      </div>
      <div class="element" data-slide-id="1">b
      </div>
      <div class="element" data-slide-id="2">c
      </div>
      <div class="element" data-slide-id="3">d
      </div>
      <div class="element" data-slide-id="4">e
      </div>
      <div class="element" data-slide-id="5">f
      </div>
      <div class="element" data-slide-id="6">g
      </div>
      <div class="element active" data-slide-id="7">h
      </div>
        <div class="element" data-slide-id="6">g
      </div>
        <div class="element" data-slide-id="6">g
      </div>
        <div class="element" data-slide-id="6">g
      </div>
        <div class="element" data-slide-id="6">g
      </div>
    </div>
  </div>
</div>

<div id="foo">Clicky</div>

  </div>
  
    <?php include ("footer.php");?>
    <script>
    $( document ).ready(function() {
    $("#foo").click(function() {
        $("#wrapper").scrollTop($("#wrapper").scrollTop()+$("div.element.active").position().top);    
    })
});
    </script>

    <!--End of videos section-->
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

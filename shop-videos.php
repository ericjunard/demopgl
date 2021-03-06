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
  <section class="play-video">
    <div class="container"> 
         <a href="#"><p class="</span> h4-padding bold"><span class=" glyphicon glyphicon-chevron-left"></span>BACK TO VIDEOS</p></a>
      <div class="row">
        <div class="col-md-6">
        <div class="video">  
          <div class="play-icon text-center"><img src="dist/img/play-icon.png"/></div>
        </div>
        <p class="title">Title ipsum dolor sit </p>
        <p class="description">Description  ipsum dolor sit amet soleat latine sit  amet soleat latine sit . . . </p>
        <a href="#"><p class="bold h4-padding">SEE NEXT VIDEO<span class="glyphicon glyphicon-chevron-right"></span></p></a>
        </div>
        <div class="col-md-6">
          <div id="main" >
            <div id="wrapper" class="sidebar">
              <div id="sidebar">
                <div class="row">
                <div class="col-md-6 ">
                  <div class="element show-image" data-slide-id="0"><img src="dist/img/shoes/1.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="element show-image" data-slide-id="0"><img src="dist/img/shoes/2.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                 </div>
                </div>
                </div>
                 <div class="row">
                <div class="col-md-6 ">
                  <div class="element show-image" data-slide-id="1"><img src="dist/img/shoes/3.png">
                    <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="element show-image" data-slide-id="1"><img src="dist/img/shoes/4.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                 </div>
                </div>
                </div>
                 <div class="row">
                <div class="col-md-6 ">
                  <div class="element show-image" data-slide-id="2"><img src="dist/img/shoes/1.png">
                    <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="element show-image" data-slide-id="2"><img src="dist/img/shoes/2.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                 </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                 <div class="element show-image " data-slide-id="3"><img src="dist/img/shoes/3.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                 </div>
                </div>
                <div class="col-md-6">
                <div class="element show-image" data-slide-id="3"><img src="dist/img/shoes/4.png">
                  <div class="btn-margin"><input class="watch-btn btn-margin-shop" type="button" value="SHOP"></div>
                </div>
                </div>
                </div>
              </div><!---sidebar-->
            </div><!---wrapper-->
          </div><!--main-->
        </div>
      </div>
    </div>
  </section>
  
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
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
  </body>
</html>

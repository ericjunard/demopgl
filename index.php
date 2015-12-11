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
    <!--Start of first fold-->
    <section >
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="ff-top">SHOP VIDEOS, <span class="brand">OR SUBMIT VIDEOS FOR SHOPPERS!</span></h1>
            <p >Lorem ipsum dolor sit amet, soleat latine ornatus at est</p>
            <div class="row">
              <div class="col-md-6"><input onclick ="window.location.href='videos'" type="submit"  class="btn btn-primary" value="SHOP VIDEOS"/></div>
              <div class="col-md-6"><input onclick ="window.location.href='submit-video'" type="submit" class="btn btn-default"/ value="SUBMIT VIDEOS"></div>
            </div>
          </div>
          <div class="col-md-6">
            <img src="dist/img/girl.png" class="ff-img-padding" >
          </div>
        </div>
      </div> <!-- /container -->
    </section>
    <!--End of first fold-->
    <!--Start of how it works-->
    <section class="how-it-works">
      <div class="container">
        <h1 class=" text-center">HOW IT WORKS</h1>
        <div class="row">
          <div class="col-md-4">
            <p> <img src="dist/img/hex1.png"> Soleat latine ornatus at est</p>
            <p>Lorem ipsum dolor sit amet, intellegat referrentur mea ei, cu ornatus deterruisset quo. Nostrum patrioque no mea. Eu errem tempor phaedrum sed, soleat sanctus eos no, pri ad hinc maiorum consectetuer.</p>
          </div>
          <div class="col-md-4">
            <p> <img src="dist/img/hex2.png"> Soleat latine ornatus at est</p>
            <p>Lorem ipsum dolor sit amet, intellegat referrentur mea ei, cu ornatus deterruisset quo. Nostrum patrioque no mea. Eu errem tempor phaedrum sed, soleat sanctus eos no, pri ad hinc maiorum consectetuer.</p>
          </div>
          <div class="col-md-4">
            <p> <img src="dist/img/hex3.png"> Soleat latine ornatus at est</p>
            <p>Lorem ipsum dolor sit amet, intellegat referrentur mea ei, cu ornatus deterruisset quo. Nostrum patrioque no mea. Eu errem tempor phaedrum sed, soleat sanctus eos no, pri ad hinc maiorum consectetuer.</p>
          </div>
        </div>
      </div>
    </section>
    <!--End of how it works-->
    <!--Start of videos section-->
    <section class="videos">
      <div class="container">
        <h1 class="section-title text-center">LATEST VIDEOS</h1>
        <div class="row">
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th1.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th2.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th3.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th4.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
        </div><!--end of row 1 latest videos-->
        <div class="row">
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th5.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th6.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th7.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-image">
              <img src="dist/img/latest-videos/th8.png">
              <div class="btn-margin"><input class="watch-btn" type="button" value="WATCH VIDEO" /></div>
            </div>
          </div>
        </div><!--end of row2 latest videos-->
        <a href="videos"><p class="bold h4-padding">Browse more videos</p></a>
      </div>
    </section>
    <!--End of videos section-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
   
  </body>
      <?php include ("cta.php");?>
      <?php include ("footer.php");?>
</html>

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
              <div class="col-md-6"><button  data-toggle="modal" data-target="#presubmit" class="btn btn-default"> SUBMIT VIDEOS</button></div>
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
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
      <?php include ("cta.php");?>
      <?php include ("footer.php");?>
      <div class="modal fade" id="presubmit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content col-md-8 col-md-offset-2">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
      <h4 class="modal-title text-center brand" id="Heading">ENTER EMAIL TO SUBMIT VIDEO</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="email" class="form-control" placeholder="Please enter email" >
          </div>
        </form>
      </div>
      <div class="modal-footer ">
      <button type="button" class="btn btn-primary">CONTINUE</button>
      </div>
      </div>
      <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
</div>
</html>

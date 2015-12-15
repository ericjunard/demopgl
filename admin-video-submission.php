<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" href="less/style.less">
    <script src= "js/less.js" type="text/JavaScript"> </script>
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- Fixed navbar -->

<nav class="navbar navbar-default  navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">pretty<span class="brand">good</span>look</a>
    </div>
      <div class="pull-right ptop">
      <p>Welcome, <span class="brand">Admin</span> <span class="btn glyphicon glyphicon-triangle-bottom"></span></p></button>
      </div>
  </div>
</nav>
<body>
<section class="">
<div class="container">
   <div class="categories">
        <div class="row">
          <div class="col-md-9">
            <ul class="nav navbar-nav ">
              <li ><a href="#">Submissions</a></li>
              <li><a href="#">All Videos</a></li>
              <li class="ptop"><button class ="btn" data-toggle="modal" data-target="#add">New Video</a></button>
           
            </ul>
          </div> 
          <div class="col-md-3">
            <input type="text" class="search" placeholder="Search" name="srch-term" id="srch-term">
              <button class="btn pull-right glyph-top"><span class="glyphicon glyphicon-search"></span></button>
           </input>
          </div>
          </div>        
        </div>
<div class="row">
<div class="col-md-12">
    <div class="table-responsive">
    <table id="mytable" class="table table-hovered table-condensed ">
        <thead>
        <th><input type="checkbox" id="checkall" />&nbsp;Select All</th>
        </thead>
        <tbody>
        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>
        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>
        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>
        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>

        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td colspan="8">2015 Top Fashion Trends : Clothes, Shoes</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn " data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn " data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>
        </tbody>
    </table>

    <div class="clearfix"></div>
    <ul class="pagination pull-right">
    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
    </ul>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
<h4 class="modal-title custom_align" id="Heading">Add New Video</h4>
</div>
<div class="modal-body">
    <form>
        <div class="row">
          <div class="col-md-6">
            <p class="title">Personal Details</p>
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
          </div>
          <div class="col-md-6">
             <p class="title">Video Details</p>
             <div class="form-group">
              <label>YouTube Title</label>
              <input type="text" name="youtube-title" class="form-control" >
            </div>
              <div class="form-group">
              <label>YouTube URL</label>
              <input type="text" name="youtube-url" class="form-control" >
            </div>
            <div class="form-group">
              <label>Video Description</label>
              <textarea type="text" name="video-description" class="form-control" ></textarea>
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
            </div>
          </div>
         
        </div>
      </form>
</div>
<div class="modal-footer ">
<button type="button" class="btn btn-primary">Add Video</button>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
</div>
<div class="modal-body">
    <form>
        <div class="row">
          <div class="col-md-6">
            <p class="title">Personal Details</p>
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
          </div>
          <div class="col-md-6">
             <p class="title">Video Details</p>
             <div class="form-group">
              <label>YouTube Title</label>
              <input type="text" name="youtube-title" class="form-control" >
            </div>
              <div class="form-group">
              <label>YouTube URL</label>
              <input type="text" name="youtube-url" class="form-control" >
            </div>
            <div class="form-group">
              <label>Video Description</label>
              <textarea type="text" name="video-description" class="form-control" ></textarea>
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
            </div>
          </div>
         
        </div>
      </form>
</div>
<div class="modal-footer ">
<button type="button" class="btn btn-primary">Update</button>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
</div>
<div class="modal-body">

<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

</div>
<div class="modal-footer ">
<div class="row">
   <div class="col-md-6"> <button type="button" class="btn btn-primary"> Yes</button></div>
    <div class="col-md-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></div>
</div>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>
</section>
    <script> 
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
    </script>
</body>
<footer>
  <div class="container">
    <p class="copyright text-center">Copyright © 2015. prettygoodlook.com. All Rights Reserved</p>
  </div>
</footer>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
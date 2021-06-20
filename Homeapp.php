<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <script src="js/bootstrap.min.js"></script>
    <style>
  .carousel-inner img {
    width: 100%;
    height: 300px;
  }
  .carousel-inner{
    
    margin-top: 60px;
    box-shadow: 10px 10px 50px 10px gray;
  }


  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  </style>
</head>z
<body>
  <script type="text/javascript">
    $(document).ready(function(){
      contents();
    });
    function contents(){
      var  showcontent = "showcontent";
      $.ajax({
      type:'get',
      url:'process.php',
      data : {showcontent:"showcontent"},
      success:function(data,status){
        $('#panel').html(data);
      }
    });
    }
    
  </script>
  <nav class="navbar navbar-expand  fixed-top" style="background:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="dmn.jpg" style="height:30px;width:50px;margin-top:0px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    </div>
    <ul class="nav navbar-nav" style="padding:5px; font-family: 'Lucida Handwriting';">
      <li class="active"> <a class="nav-link"  href="#">Home</a></li>
      <li><a href="#"><a class="nav-link" href="WriteBlog.php">Write Blog</a></a></li>
      <li> <a class="nav-link" href="Gallary.php">Gallrey</a></li>
      <li> <a class="nav-link" href="Guidelines.html">Guidelines</a></li>
      <li> <a class="nav-link" href="#">About us</a></li>
      <li> <a class="nav-link" href="#">Contact us</a></li>
    </ul>
     <ul class="nav">
     
       <li class="nav-item">
        <a class="nav-link" href="#" id="mycl">SIGNUP<i class="fa fa-register"></i></a>
      </li>   
       <li class="nav-item">
        <a class="nav-link" href="#" id="myc">LOGIN<i class="fa fa-sign-in"></i></a>
      </li>   
            
    </ul>
  </div>
</nav>

<div class="container" >
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/11.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/12.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/77.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/13.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/sina.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="container" style="margin-top:30px;height: auto;">
  <div id="panel">
   
  </div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:18px 25px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Register</h4>
        </div>
        <div class="modal-body" style="padding:18px 25px;">
          <form role="form" method="post"  action ="process.php">
            <div class="form-group">
              <label for="usrname"><span 
                class="glyphicon glyphicon-user"></span> Username</label>
             <input type="text" name="UserNaam" class="form-control"  placeholder="UserName">

            </div>
             <div class="form-group">
             <label for="usrname"> <i class="fa fa-tablet"></i>MOBILE NUMBER</label>
            
      <input type="text" class="form-control" name="Mobile" placeholder="Enter Mobile Number">
            </div>
             <div class="form-group">
              <label for="usrname"><i class="fa fa-envelope "></i> Email</label>
             <input type="Email" name="Email" class="form-control"  placeholder="EMAIL PLEASE">
            </div>
             <div class="form-group">
              <label for="usrname"><i class="fa fa-user"></i> UserID</label>
             <input type="Text" name="USERID" class="form-control"  placeholder="CREATE USERID">
            </div>
             <div class="form-group">
             <label for="usrname"> <i class="fa fa-lock"></i> Password </label>
             <input type="Password" name="Password" class="form-control" placeholder="Create Password">
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-repeat"></i></span> CONFIRM Password</label>
              
            <input type="Password" name="ConfirmPassword" 
            class="form-control" placeholder="Repeat Password">
            </div>
             <div class="form-group">
              <label for="im"><i class="fa fa-repeat"></i></span>Upload Your Pic</label>
              
            <input type="File" name="Pic" 
            class="form-control" placeholder="Pic Avial. Here">
            </div>
            <button type="Submit" name="Submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register Now</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="Reset" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#mycl").click(function(){
    $("#myModal").modal();
  });
});
</script>
<div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 25px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>LOGIN</h4>
        </div>
        <div class="modal-body" style="padding:18px 25px;">
          <form role="form" method="post" name="loginr" action ="login.php">
            
             <div class="form-group">
              <label for="usrname"><i class="fa fa-user"></i> UserID</label>
           <input type="text" class="form-control" name="txtuid" placeholder="Enter your user id plz" >
            </div>
           
             <div class="input-group mb-3">
            <input class="form-control" type="password" id="txtpass" placeholder="password" name="txtpass" />
             <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-eye"></i></span>
        </div>
              </div>
            
           
            <button type="Submit" name="Submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register Now</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="Reset" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 

  
    <script type="text/javascript">
      $(document).ready(function() {
        $('i').on('click',function(){
          if ($('#txtpass').attr('type') == 'password') {
            $(this).removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            $('#txtpass').attr('type', 'text');
          } else if ($('#txtpass').attr('type') == 'text') {
            $(this).removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            $('#txtpass').attr('type', 'password');
          }
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
  $("#myc").click(function(){
    $("#LoginModal").modal();
  });
});
</script>

</body>
</html>

 
  
  <?php ?>
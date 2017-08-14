<!DOCTYPE html>
<html>
<head>
  <title>Picture Gallery</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include('head.php'); ?>
</head>
<style>
    
    body{
        margin:0px;
    }
    .imagebox img{
        height:200px;
        max-width: 100%;
    }
    
/*
    .bgblure{
            position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100%;
   background-color: rgba(0, 0, 0, 0.6); 
    z-index: 10000;
    }
*/
             p {
font-family: Cambria,Georgia,serif;
	font-size: 25px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 27.5px;
}
h1 {
    color:whitesmoke;
	font-family: Cambria,Georgia,serif;
	font-size: 37px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 40.7px;
    z-index: 2 ;
}
/*
    .bgblure:before{
        content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
     background-color: rgba(0, 0, 0,1); 
        z-index: 1;
    background-image: -webkit-radial-gradient(center top, ellipse cover, rgba(0, 0, 0, 0.3), rgb(0, 0, 0));
    background-image: -moz-radial-gradient(center top, ellipse cover, rgba(0, 0, 0, 0.3), rgb(0, 0, 0));
    background-image: radial-gradient(center top, ellipse cover, rgba(0, 0, 0, 0.3), rgb(0, 0, 0));
}
*/
    .item:before{
    content:"";
    background: transparent url("http://i.imgur.com/8B7UFiv.png") repeat;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 100px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  font-size:22px;
}
    a.back-to-top {
    display: none;
    width: 50px;
    height: 50px;
    text-decoration: none;
    color:white;
    text-align: center;
    padding: 10px;
    font-size: 20pt;
    position: fixed;
    z-index: 999;
    right: 10px;
    bottom: 60px;
    background: #27AE61 url("up-arrow.png") no-repeat center 43%;
    background: #31b0d5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    font-size: 20px;
    }
    .fix1 {
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:200px;
        z-index: 1000;
        background: rgb(78, 134, 181);
        color:antiquewhite;
    }
    .fix2{
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:250px;
        z-index: 1000;
        background: rgb(181, 31, 31);
        color:antiquewhite;
    }  .fix3{
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:300px;
        z-index: 1000;
        background: #31b0d5;
        color:antiquewhite;
    }
    .navbar a{
        color:whitesmoke !important;
    }
    .btn-default {
    color: #f9f2f2;
    background-color: #31b0d5;
        border-color: #31b0d5;}
    .btn-default:hover{
        color: #f9f2f2;
    background-color: #0b9dc7;
        border-color: #31b0d5;}  
    }
    .carousel-indicators li{
        border: 1px solid blue;
    }
    .carousel-control{z-index: 2;}

  
@-moz-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
@-webkit-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}


.arrow {
  position: relative;
  bottom: 0px;
  left: 50%;
  margin-left: -20px;
  width: 40px;
  height: 40px;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyICBsMTg5Ljk5OS0xOTBjMjAuMTc4LTIwLjE3OCw1My4xNjQtMTkuOTEzLDczLjY3MiwwLjU5NWwwLDBjMjAuNTA4LDIwLjUwOSwyMC43NzIsNTMuNDkyLDAuNTk1LDczLjY3MUwyOTMuNzUxLDQ1NS44Njh6Ii8+DQo8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjIwLjI0OSw0NTUuODY4YzIwLjE4LDIwLjE3OSw1My4xNjQsMTkuOTEzLDczLjY3Mi0wLjU5NWwwLDBjMjAuNTA5LTIwLjUwOCwyMC43NzQtNTMuNDkzLDAuNTk2LTczLjY3MiAgbC0xOTAtMTkwYy0yMC4xNzgtMjAuMTc4LTUzLjE2NC0xOS45MTMtNzMuNjcxLDAuNTk1bDAsMGMtMjAuNTA4LDIwLjUwOS0yMC43NzIsNTMuNDkyLTAuNTk1LDczLjY3MUwyMjAuMjQ5LDQ1NS44Njh6Ii8+DQo8L3N2Zz4=);
  background-size: contain;
}

.bounce {
  -moz-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}
      .carousel-inner h1{
        z-index: 2 !important;
        bottom: 200px !important;
    }
    </style>
<body>
  <a href="http://facebook.com" class="btn btn-social-icon btn-facebook fix1">
    <i class="fa fa-facebook"></i></a>
    <a href="http://facebook.com" class="btn btn-social-icon btn-google-plus fix2">
     <i class="fa fa-google-plus"></i></a>
    <a href="http://facebook.com" class="btn btn-social-icon btn-twitter fix3">
     <i class="fa fa-twitter"></i></a>
<a href="#" class="back-to-top fa fa-arrow-up"></a>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px; background:#393c41; -webkit-box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);
box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="drop1" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu"aria-labelledby="drop1" id="slidemenu" role="menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
        <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default fa fa-search" style="font-size:20px;"></button>
    </form>
      <ul class="nav navbar-nav navbar-right">
          
        <li><?= anchor('Upload','Add Product'); ?></li>
        <li><a data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
         
<div id="carousel-example" class="carousel slide" data-ride="carousel" style="margin-top:55px;">
     
  <ol class="carousel-indicators">
              
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
    <div class="arrow bounce">

    </div>
  </ol>
    
  <div class="carousel-inner">
     <div class="bgblure"></div>
    <div class="item active">
      <a href="#"><img style="max-height:600px; width:100%;" src='<?php echo base_url('/assests/image/slide1.jpg')?>' /></a>
      <div class="carousel-caption">

        <h1>&#10077;In photography there is a reality so subtle that it becomes more real than reality&#10078;</h1>

      </div>
    </div>
    <div class="item">
     <a href="#"><img style="max-height:600px; width:100%;" src='<?php echo base_url('/assests/image/slide2.jpg')?>' /></a>
      <div class="carousel-caption">
          <h1>&#10077;There is one thing the photograph must contain, the humanity of the moment&#10078;</h1>

      </div>
    </div>
    <div class="item">
     <a href="#"><img style="max-height:600px; width:100%;" src='<?php echo base_url('/assests/image/slide3.jpg')?>' /></a>
      <div class="carousel-caption">
          <h1>&#10077; Taking an image, freezing a moment, reveals how rich reality truly is&#10078;</h1>

      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

 <div class="container">
<div class="contentbody" >
  <div class="row" style="margin:0px;">
     <div class="col-lg-4 col-md-4 ">
        <h2>Art Selected by our Curators</h2>
         <p>Discover new original artwork from around the world</p>
  
    </div>  
  </div>
  
  <?php if(count($data)):?>
    <?php foreach($data as $head_data) :?>

  <div class="row">
  <?php echo form_open('Cart/add',['class'=>'form-horizontal']);?>

    <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="imagebox">
              <img src=<?php echo base_url($head_data->p_image)?> class="" alt="picture">
              <h2>New This Week</h2>
              <p>Browse New Portraits and Abstracts</p>
              <p id="id"><?= $head_data->p_id ?></p>
              <p id="p_price"><?= $head_data->p_price ?></p>
              <p id="p_name"><?= $head_data->p_name ?></p>
              <?= anchor('Stuff','View Collections',['class'=>'btn btn-primary'])?> 
              
               <?php
                        
                        // Create form and send values in 'shopping/add' function.
                        //echo form_open('Shoping/add');
                        echo form_hidden('id', $head_data->p_id);
                        echo form_hidden('qty', 1);
                        echo form_hidden('name', $head_data->p_name);
                        echo form_hidden('price', $head_data->p_price);
                        ?> 
              <p><?php echo form_submit('', 'Add to Cart'); ?></p>  
              <?php echo form_close(); ?>
              
          </div>
          </div>
          <?php endforeach; ?>
         <?php else: ?>
         <p> No content found</p>
         <?php endif ?>
      
      
  </div>
</body>
 <script>
 
        $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
           $(function(){ 
      $('#drop1').click(function(e){ 
          e.stopPropagation();
          $('#slidemenu').slideToggle(500);
      });
      $('#drop1').click(function(e){
          e.stopPropagation();
      });

      $(document).click(function(){
          $('#slidemenu').slideUp(500);
      });
   }); 
           var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
}); 

$('a.back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
      
});
</script>
</html>

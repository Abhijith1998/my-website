<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
.pleft {
	padding-left:3px;
}
.pright {
	padding-right:3px;
}
  .height{ height:40px; line-height:40px;}
.height .pageTitle{ line-height:4em;}
.heightt{ height:100%; line-height:340px;}

.igset{
	height: 40px;
	width:auto;
	padding-left:30px;

	padding-right: 10px
}

.openapp{
	color:black; 
	font-size:22px;
	position:absolute; 
	margin-left: -25px;
	font-weight: 400;
}

@media (max-width:500px){
	
	.openapp{
	font-size:20px;
    color:#616161;
    font-weight:500;
}

}

.header
{
    height: 56px;
    width: 100%;
    padding: 0 15px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background: #eee;
    box-shadow: 0 2px 4px -1px rgb(0 0 0 / 20%), 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%);
    will-change: padding-left,padding-right;
    position: relative;
}

.imgg{
   height:500px;  width:400;
}
</style>
<link rel="manifest" href="manifest.json">
    <script>
        //if browser support service worker
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('sw.js');
        };
      </script>
</head>

<body>
<?php include("include/connection.php");?>


<!-- App Header -->
<div  class="header">
 <div  class="openapp">  <img   class="igset" src=" ./assets/img/logo2.png" alt="">Open with an app</div>
<a href="/Crazy_Club.apk">	<i class="icon ion-md-download" style="color:#616161; font-size:25px; position:absolute; margin-top: -13px; right:20px;"></i> </a>
</div>
<div style="padding: 20px 0px; ">
<center><span style="color: #009688; font-size: 28px; font-family: helvetica; font-weight: 400; ">Welcome Back</span></center>
<center><span style="color: #9a9a9a; font-size: 16px; font-family: helvetica; font-weight: 400; ">Quality Guarantee</span></center>
</div>
<!-- App Capsule -->
<div id="appCapsule heightt"> 
  <!-- Card Overlay Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block imgg " src="banner/slider/11.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block imgg " src=" ./banner/slider/21.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block imgg " src=" ./banner/slider/31.jpg" alt="Third slide">
    </div>
   <div class="carousel-item">
      <img class="d-block imgg " src=" ./banner/slider/41.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block imgg " src=" ./banner/slider/51.jpg" alt="Fivth slide">
    </div>
  </div>
  
   
</div>

<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent mt-2">
    <div class="sectionTitle mb-2"> 
      
      <!-- post list -->
      <div style="background: white" class="vcard">
        <div class="row" id="searchResult"> 
          <!-- item -->
          <?php
	$i=0;
  $productQuery=mysqli_query($con,"select * from `tbl_product` where `status`='1'");
  while($productResult=mysqli_fetch_array($productQuery)){$i++;?>
          <div style="box-sizing: border-box;" class="col-6 <?php if(($i%2)==0){echo"pleft";}else{echo "pright";}?>">
            <div class="vcard card"> <a href="/login" class="postItem">
              <div class="imageWrapper"> <img src="<?php echo $productResult['images'];?>" alt="image" class="image"> </div>
              <p class="text-center"><?php echo $productResult['name'];?></p>
              <footer style="font-size: 14px; font-weight:400; color: #f39839">₹ <?php echo number_format($productResult['price'], 2);?></footer>
              </a> </div>
          </div>
          <?php }?>
       
      </div>
        <br><br>
      </div>
     
      
     
      <br>
     
      
    </div>
    
   
    
  </div>
</div>
<?php include("include/footer.php");?>
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>
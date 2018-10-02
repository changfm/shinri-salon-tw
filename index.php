<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Yogahub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<script src="js/bootstrap.js"> </script>
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--banner-->
	<div class="banner">
		<!--header-->
		<div class="headder">
			<div class="container">				
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html"> <img src="images/logo.png" alt=""/> </a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">首頁</a></li>
								<li><a href="about.html">關於我們</a></li>
								<li><a href="services.html">服務項目</a></li>
                                <li><a href="product.html">商品介紹</a></li>
                                <li><a href="gallery.html">作品集</a></li>
								<li><a href="contact.html">聯絡我們</a></li>
							</ul>	
						</div>	
						<div class="clearfix"> </div>
					</div>	
				</nav>				
			</div>	
		</div>	
		<!--//header-->
		<!-- banner-text Slider starts Here -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});	
			});
		</script>
		<!--//End-slider-script -->
		<div class="banner-title">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>					
							<h3>森里SALON</h3>
			                <p>森里基於自然科學的理念，與大自然共存為宗旨，</p>
						    <p>致力於提供「美、健康、感動」的服務。</p>
                            <p>全系列商品以對人體與環境無害、降低對髮質與肌膚傷害為目標研發製成</p>
						</li>
                        
					</ul>
				</div>
		</div>
	</div>
	<!--//banner-->
</body>
    <bottom>			
        <center><br>
        <br>copyright @2018 shinri salon
        <br>版權所有，轉載必究<br>
       
        <br>森里沙龍 Shinri Salon
        <br>預約專線：07-3358136
        <br>聯絡信箱：shinri.tw@gmail.com
        <br>地址：高雄市苓雅區福建街209號
        <br>
            <a href="https://www.facebook.com/日本森里沙龍台灣總店-2036230656448319/"><img class="img-facebook" src="images/facebook.jpg" alt="img02" /></a>
<<<<<<< HEAD
          <a href=><img class="img-facebook" src="images/line.jpeg" " /></a>   
=======
>>>>>>> 187a4375528f092fe9effa26e7c54cfa10726d0f
        </center>
        </bottom>
</html>
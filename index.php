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
								<li><a href="index.html" class="active">首頁</a></li>
								<li><a href="#about" class="scroll">關於我們</a></li>
								<li><a href="#services" class="scroll">服務項目</a></li>
                                <li><a href="#gallery" class="scroll">作品集</a></li>
								<li><a href="#contact" class="scroll">聯絡我們</a></li>
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
						<li>					
							<h3>秋天新髮型</h3>
							<p>當秋天敲門。換個質感新髮色迎接</p>
						</li>
					</ul>
				</div>
		</div>
	</div>
	<!--//banner-->
	<div class="about" id="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-6 about-info">
					<img src="images/item1.jpg" alt=""/>
				</div>
				<div class="col-md-6 about-info" style="font-size:18px;">
					<h3>森里SALON</h3>
			        <p>森里基於自然科學的理念，與大自然共存為宗旨，</p>
					<p>致力於提供「美、健康、感動」的服務。</p>
                    <p>全系列商品以對人體與環境無害、降低對髮質與肌膚傷害為目標研發製成</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<div class="services-grids">
				<div class="col-md-4 services-grids-info">
					<h3>服務項目</h3>
					<ul style="font-size:20px;">
                        <li>洗髮 $300</li>
                        <li>剪髮 $800</li>
						<li>染髮 $2,000~</li>
						<li>護髮</li>
                        <p>(短)$1,000 (中)$1,300 (長)$1,600</p>
						<li>HiEster頭皮洗淨</li>
                        <p>(短)$2,000 (中)$2,000 (長)$2,200</p>
                        <p>*(追加生藥 +5CC $300)</p>
                        <p>*(追加時間 +5min $300)</p>
						<li>Ester護理＋HiEster頭皮洗淨</li>
                        <p>(短)$3,500 (中)$4,000 (長)$4,500</p>
					</ul>
				</div>
				<div class="col-md-4 services-grids-info" style="font-size:20px;">
					<img src="images/item2.jpg" alt=""/>
					<h4>髮質重整</h4>
					<p>髮質重整</p>						
				</div>
				<div class="col-md-4 services-grids-info" style="font-size:20px;">
					<img src="images/item3.jpg" alt=""/>
					<h4>Ester護理＋HiEster頭皮洗淨</h4>
					<p>Ester護理＋HiEster頭皮洗淨</p>
				</div>				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3>作品集</h3>
			<div class="gallery-bottom" style="font-size:20px;">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="single.html" data-largesrc="images/hair1.jpg" data-title="秋天新髮型" data-description="當秋天敲門。換個質感新髮色迎接">
							<img class="img-responsive" src="images/hair1.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/hair2.jpg" data-title="秋天新髮型" data-description="當秋天敲門。換個質感新髮色迎接">
							<img class="img-responsive" src="images/hair2.jpg" alt="img02"/>
						</a>
					</li>
					 <div class="clearfix"> </div>
				</ul>
			</div>
			<!--end-gallery js-->
			<script src="js/grid.js"></script>
				<script>
					$(function() {
						Grid.init();
					});
				</script>
			<!--//end-gallery-->
		</div>	
	</div>
	<!--gallery-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container" style="font-size:20px;">
			<h3>聯絡我們</h3>
			<div class="contact-grids">
				<div class="col-md-7 contact-left">				
					<form>
						<input type="text" value="名字" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '名字';}" required="">
						<input type="email" value="信箱" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '信箱';}" required="">
						<input type="text" value="電話" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '電話';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = '留言...';}" required="">留言...</textarea>
						<input type="submit" value="送出" >
					</form>
				</div>
				<div class="col-md-5 contact-right">
					<p class="cnt-p">森里SALON </p>
					<p>高雄市苓雅區福建街209號</p>
					<!--<p>電話: (07) 111-2222</p>
					<p>Email : <a href="mailto:changfm@gmail.com">shinr_salon.gmail.com</a></p> -->
				</div>							
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
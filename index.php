<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Trafitac Security Ltd</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>     
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/easyTooltip.js"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body id="page1">
	<?php $page = 'index';?>
    
    <?php include "header.php";?>
    <section id="content">
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_6">
                    	<h3>Services</h3>
                        <div class="indent-bot">
                        	<div class = "icondisplay"><img src = 'images/guardicon.png'/></div>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="manned_guarding.php">GUARDING </a></h6>
                                We provide fully licensed, quality guards on single or multiple sites for organisations from a diverse range of market sectors.
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="indent-bot">
                        	<div class = "icondisplay"><img src = 'images/carparkicon.png'/></div>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="traffic_management.php">CAR PARK MANAGEMENT</a></h6>
                                Offering a safe, secure and clean car park provides real value to your customers who use them.
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="p3">
                        	<div class = "icondisplay"><img src = 'images/warehouseicon.jpg'/></div>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="monitoring_systems.php">TERMINAL AND WAREHOUSE SECURITY</a></h6>
                                Trafitac has the man-power, material, equipment and technological resources for the effective management of all Terminals, warehouses and storage facilities.
                            </div>
                            <div class="clear"></div>
                        </div>
                        <span class="button-2">
                            <a href="manned_guarding.php"><strong>More Services...</strong></a>
                        </span>
                    </article>
                    <article class="grid_6">
                    	<div class="indent-top">
                            <div class="wrapper indent-bot2">
                                <figure class="img-indent"><img src="images/page1.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    <h4>At Trafitac <strong>We take our</strong><strong class="color-3">work <em>Seriously!</em></strong></h4>
                                </div>
                            </div>
                            <p class="p1">Trafitac brings context to the business of security and car park management. 
From risk assessment to delivery, we work in partnership with the government, local businesses and major corporate organisations to provide integrated solutions to security and car park management challenges.  </p>
                            <p class="img-indent-bot">Trafitac prides it's self on applying the world's best standard in security management. In our quest to champion excellence, we have a rigorous recruitment process aimed at acquiring individuals to make an exceptional workforce...</p>
                            <span class="button-2">
                                <a href="company.php"><strong>Read More...</strong></a>
                            </span>
                        </div>                        
                    </article>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "footer.php";?>
	
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function(){
			$('.slider')._TMS({
				duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				pagination:true,//'.pagination',true,'<ul></ul>'
				pagNums:false,
				slideshow:7000,
				banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false
			})
		})
	</script>
</body>
</html>

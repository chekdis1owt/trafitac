<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trafitac.com - Contact Us</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
	<script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>     
    <script src="js/easyTooltip.js" type="text/javascript"></script> 
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body id="page5">
	<?php $page = 'contact';?>
	<?PHP include "header.php";?>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                	<article class="grid_9">
                    	<h3>Contact <span>Form</span></h3>
                        <?php
						if ($_REQUEST['email'] && $_REQUEST['name'] && $_REQUEST['message']){
						  //send email
						  $email = $_REQUEST['email'] ;
						  $subject = $_REQUEST['subject'] ;
						  $message = $_REQUEST['message'] ;
						  mail("info@trafitac.com", $subject,$message, "From:" . $email);
						  echo "Thank you for using our contact form. We will reply to your enquiry as soon as possible.<br/><br/>";
						 }
						 ?>
                        If you would like to find out more about Trafitac Security and our services please do not hesitate to contact us.
                        <form id="contact-form" method="post" enctype="multipart/form-data" action = "contact.php">                    
                            <fieldset>
                                  <label><span class="text-form">Your Name:</span><input type="text" name = "name"></label>
                                  <label><span class="text-form">Your Email:</span><input type="text" name = "email"></label>                              
                                  <div class="wrapper">
                                    <div class="text-form">Your Message:</div>
                                    <div class="extra-wrap">
                                        <textarea name="message"></textarea>
                                        <div class="clear"></div>
                                        <div class="buttons">
                                        	<span class="button-2">
                                                <a onClick="document.getElementById('contact-form').reset()"><strong>clear</strong></a>
                                            </span>
                                            <span class="button-2">
                                                <a onClick="document.getElementById('contact-form').submit()"><strong>send</strong></a>
                                            </span>
                                        </div> 
                                    </div>
                                  </div>                            
                            </fieldset>						
                        </form>
                    </article>
                    <article class="grid_3">
                    	<h3>Our Location</h3>
                        <div class="wrapper img-indent-bot">
                            <figure class="map-border">
                                <iframe width="216" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dansoman+Roundabout,+Accra,+Greater+Accra,+Ghana&amp;aq=1&amp;oq=dan,+Accra,+Greater+Accra,+Ghana&amp;sll=5.545923,-0.25731&amp;sspn=0.049805,0.076818&amp;g=Dansoman,+Accra,+Greater+Accra,+Ghana&amp;ie=UTF8&amp;hq=Dansoman+Roundabout,&amp;hnear=Accra,+Accra+Metropolis,+Greater+Accra,+Ghana&amp;t=m&amp;ll=5.558141,-0.265012&amp;spn=0.006295,0.151153&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Dansoman+Roundabout,+Accra,+Greater+Accra,+Ghana&amp;aq=1&amp;oq=dan,+Accra,+Greater+Accra,+Ghana&amp;sll=5.545923,-0.25731&amp;sspn=0.049805,0.076818&amp;g=Dansoman,+Accra,+Greater+Accra,+Ghana&amp;ie=UTF8&amp;hq=Dansoman+Roundabout,&amp;hnear=Accra,+Accra+Metropolis,+Greater+Accra,+Ghana&amp;t=m&amp;ll=5.558141,-0.265012&amp;spn=0.006295,0.151153" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                            </figure>
                        </div>
                        <dl>
                            <dt class="p2">P.O.Box DS 1043, Dansoman, Accra, Ghana</dt>
                            <dd><span>Head Office:</span>  +233 302 312 228</dd>							
                            <dd><span>Sales:</span>  +233 203 654 550</dd>
                            <dd><span>Fax:</span>  +233 302 310 288</dd>
                            <dd><span>Email:</span> <a class="link" href="mailto:info@trafitac.com">info@trafitac.com</a></dd>
                        </dl>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
	<?PHP include "footer.php";?>
    
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

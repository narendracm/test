<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta http-equiv="cache-control" content="no-cache"/>
<title>Mobile Website - HTML5 & CSS3</title>
<script src="js/jquery.js" type="text/javascript"/></script>
<script src="js/jquery.mobile-1.0.min.js" type="text/javascript"/></script>
<!--Menu-->
<script type="text/javascript" src="js/menu/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/menu/app.js"></script>
<link rel="stylesheet" href="css/menu/main.css?v=31" />
<link href="css/layout.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!--Toggle Menu-->
<script type="text/javascript">
			$(function() {
				$('#navigation').click(function() {
					$('.navigation').slideToggle('fast');
					return false;
				});
			});
</script>
<!--ToTop-->
<script type="text/javascript" src="js/totop/totop.js"></script>
<script type="text/javascript" src="js/totop/jquery_004.js"></script>
</head>
<body>
<!-- Left Side Slide Area Starts -->
<!-- Social Network Icons Starts -->
<div id="social-icons">
	<ul>
            <li><a href="#"><img src="images/social/icon-facebook.png" alt="" border="0"/></a></li>
            <li><a href="#"><img src="images/social/icon-twitter.png" alt="" border="0"/></a></li>
            <li><a href="#"><img src="images/social/icon-fliker.png" alt="" border="0"/></a></li>
            <li><a href="#"><img src="images/social/icon-tumblr.png" alt="" border="0"/></a></li>
	</ul>
</div>
<!-- Social Network Icons Starts -->
<div class="clear"></div>
<!-- Menu Starts -->
<div id="menu">
	<ul>
		<li><a href="index.html" class="contentLink" rel="external"><span><img src="images/icon-home.png" alt="" border="0"/></span>Home </a></li>
		<li><a href="about-us.html" class="contentLink" rel="external"><span><img src="images/icon-about-us.png" alt="" border="0"/></span>About us</a></li>
		<li><a href="services.html" class="contentLink" rel="external"><span><img src="images/icon-services.png" alt="" border="0"/></span>Services</a></li>
		<li><a href="our-team.html" class="contentLink" rel="external"><span><img src="images/icon-team.png" alt="" border="0"/></span>Team</a></li>
		<li><a href="blog.html" class="contentLink" rel="external"><span><img src="images/icon-blog.png" alt="" border="0"/></span>Blog</a></li>
		<li><a href="video-gallery.html" class="contentLink" rel="external"><span><img src="images/icon-videos.png" alt="" border="0"/></span>Videos Gallery</a></li>
		<li><a href="portfolio.html" class="contentLink" rel="external"><span><img src="images/icon-portfolio.png" alt="" border="0"/></span>Pictures Gallery</a></li>
		<li><a href="typography.html" class="contentLink" rel="external"><span><img src="images/icon-typography.png" alt="" border="0"/></span>Typography</a></li>
<li><a href="typography-sliders.html" class="contentLink" rel="external"><span><img src="images/icon-typography-slider.png" alt="" border="0"/></span>Sliders</a></li>
		<li><a href="testimonials.html" class="contentLink" rel="external"><span><img src="images/icon-testimonials.png" alt="" border="0"/></span>Testimonials</a></li>
            <li><a href="map.html" class="contentLink" rel="external"><span><img src="images/icon-map.png" alt="" border="0"/></span>Location</a></li>
		<li class="active"><a href="contact.php" class="contentLink" rel="external"><span><img src="images/icon-contact-us.png" alt="" border="0"/></span>Contact us</a></li>
	</ul>
</div>
<!-- Menu Ends -->
<!-- Left Side Slide Area Ends -->
<div data-role="page" data-theme="a" id="contact-us">
	<!--Header Starts -->
	<div id="header">
		<div class="strip">
			<!--Logo and Icons-->
			<div class="icons f_left" >
				<a href="#" class="showMenu"><img src="images/icon-menu.png" alt="Menu" border="0"/></a>
			</div>
			<span><a href="index.html" rel="external"><img src="images/logo.png" alt="Logo" width="196" height="38"/></a></span>
			<div class="icons f_right">
				<a href="#" data-transition="slide" data-icon="arrow-l" data-direction="reverse" data-rel="back"><img src="images/icon-back.png" alt="back" border="0"/></a>
			</div>
			<!--/Logo and Icons-->
		</div>
		<div class="clear">
			 &nbsp;
		</div>
	</div>
	<!-- /Header -->
	<div class="clear">
	</div>
	<div data-role="content">
		<div>
			<div class="f_left">
				<h2>Postal Address</h2>
				<strong>Envato</strong><br>
				 PO Box 21177 <br>
				 Little Lonsdale St, Melbourne <br>
				 Victoria 8011 Australia<br>
				<br>
				 Tel: +61 (0) 3 8376 6284 <br>
				 Fax: +61 (0) 3 8376 6284 <br>
				 Email: <a href="mailto:abc@abc.com" target="_blank">abc@abc.com</a>
			</div>
			
			<div class="f_right"><br>
				<a href="map.html" rel="external"><img src="images/map.jpg" alt="" style="max-width:100%"/></a>
			</div>
		</div>
            <div class="clear"></div>
		<h2>General Inquiries</h2>
            <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Thanks for your email.</p>
            <?php } else { ?>
            
				
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        		<p class="alert">Error submitting the form</p>
                    		<?php } ?>
				
					<form id="contact-us" action="contact.php" method="post">
						* Required Fields.<br><br>
                                    <div style="margin-bottom:12px">
							<label >Name *</label>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        
						<div style="margin-bottom:12px">
							<label >Email *</label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        
						<div style="margin-bottom:12px">
							<label >Message *</label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                        
							<button name="submit" type="submit" class="subbutton">Send</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
				</div>
				
			<?php } ?>
	</div>
	<!-- /Contents -->
	<div class="clear">
	</div>
	<div id="footer">
		<div class="strip">
			<strong>Envato</strong><br>
			 PO Box 21177 <br>
			 Little Lonsdale St, Melbourne <br>
			 Victoria 8011 Australia<br>
			<br>
			<div class="f_left">
				<img src="images/icon-footer-phone.png" alt="" border="0"/>
			</div>
			<div class="f_left">
				+61 (0) 3 8376 6284
			</div>
			<br>
			<div class="clear">
			</div>
			<div class="f_left">
				<img src="images/icon-footer-contacts.png" alt="" border="0"/>
			</div>
			<div class="f_left">
				<a href="mailto:abc@abc.com" target="_blank">abc@abc.com</a>
			</div>
			<br>
			<br>
			 © 2012 Mobile Theme | <a href="privacy-policy.html" rel="external">Privacy Policy</a>
                   <br>
			<br>
                   <!--ToTop Starts-->
          		<div id="scroll-to-top"><a href="#top" id="top-link"><img src="images/to-top.png" alt="" border="0"/></a></div>
          		<!--ToTop Ends-->
		</div>
	</div>
</div>
<!-- /footer -->
</div>
<!-- / page -->
<script type="text/javascript" src="js/contact.js"></script>
</body>
</html>
<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot to enter in your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'You forgot to enter a message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'youremailhere@googlemail.com';
		$subject = 'Submitted message from '.$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>
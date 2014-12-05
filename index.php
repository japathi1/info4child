<?php
session_start();

unset($_SESSION['uid']);
unset($_SESSION['FirstName']);	
	
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>:: Info4Child ::</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Signika:600,400,300' rel='stylesheet' type='text/css'>
	<link href="lib/css/style.css" rel="stylesheet" type="text/css" media="screen">
	<link href="lib/css/style-headers.css" rel="stylesheet" type="text/css" media="screen">
    <link href="lib/css/style-colors.css" rel="stylesheet" type="text/css" media="screen">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link href="style-ie.css" rel="stylesheet" type="text/css" media="screen">
	<![endif]-->
    <script type="text/javascript">
		function validlogin(){
			if(document.loginform.username.value == ""){
					alert("Please enter Username");
					document.loginform.username.focus();
					return false;
			}
			if(document.loginform.password.value == ""){
					alert ( "Please enter Password");
					document.loginform.password.focus();
					return false;
			}
			if(document.loginform.designation.value == "designation"){
					alert ( "Please select designation");
					document.loginform.designation.focus();
					return false;
			}							
		}	
	</script>		    
</head>

<body class="home"><div class="root">
	<header class="h6 sticky-enabled no-topbar">
		<section class="top">
			<div>
				<p>Call us: +91-844-77-94568 | E-mail: info@info4child.com</p>
				<nav>
					<ul>
						<li><a href="#">Our Team</a></li>						
						<li><a href="#">Careers</a></li>
						<li><a href="#">Blog</a></li>												
					
					</ul>
					<select id="top-nav" name="sec-nav">
						<option value="#" selected="selected">Our Team</option>
					    <option value="#">careers</option>
						<option value="#">Blog</option>						
						
					</select>
				</nav>
			</div>
		</section>
		<section class="main-header">
			<p class="title"><a href="index.html"><img src="lib/images/logo.png" alt="Info4Child" width="180" height="35"></a> <span>Being Educated Be Human</span></p>
			<nav class="social">
				<ul>
					<li><a href="#" class="facebook">Facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
					<li><a href="#" class="googleplus">Google+</a></li>
					<li><a href="#" class="pinterest">Pinterest</a></li>
					<li><a href="#" class="rss">RSS</a></li>
				</ul>
			</nav>
			<nav class="mainmenu">
				<ul>
					<li class="current-menu-item"><a href="index.html">Home</a>
						<!--<ul>
							<li class="current-menu-item"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							
						</ul>-->
					</li>					
					<li><a href="#">About Us</a></li>
					<li><a href="#">What We Do</a></li>			
					<li><a href="#">Testimonials</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Take A Tour</a></li>					
				</ul>
				<select id="sec-nav" name="sec-nav">
					<option value="#">Main Menu</option>
					<option value="#">Home</option>					
					<option value="#">About Us</option>
					<option value="#">What We Do</option>
                    <option value="#">Testimonials</option>
					<option value="#">Contact Us</option>
				    <option value="#">Take Tour</option>
					
				</select>				
			</nav>
			<div class="clear"></div>
		</section>
	</header>
	
	<section class="slider11 p05">
		<div class="slider">
		<article>
			<div>
				<h3>Be Your Child's Best Friend</h3>
				<p>There is a purely emotional part of the parent/child relationship that is built on affection and esteem.</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl1.png" alt="">
		</article>
		<article>
			<div>
				<h3>Get Involved With Your Child's Education</h3>
				<p>Showing your kids you value learning, self-discipline, and hard work.</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl2.png" alt="">
		</article>
		<article>
			<div>
				<h3>Explore Your Child Interest</h3>
				<p>Helping your child become aware of their interests is the first step in their career journey.</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl3.png" alt="">
		</article>
        	<article>
			<div>
				<h3>Be A Part Of Success Story</h3>
				<p>In doing so, you can be part of the success story that has delivered real results for real people.</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl4.png" alt="">
		</article>
		<article>
			<div>
				<h3>Find Out, Marks Are More Then Just Numbers</h3>
				<p>Counting is the action of finding the number of elements of a finite set of objects.</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl5.png" alt="">
		</article>
		<article>
			<div>
				<h3>Be in Touch With Your Child's Teacher</h3>
				<p>When you want to find out how your child is doing in school, do you know the most effective way to get in touch with his teacher?</p>
				<p class="more"><a href="#">Read more</a></p>
			</div>
			<img src="lib/images/sl6.png" alt="">
		</article>
		</div>
	</section>

	<section class="landing-form">
		<form name="loginform" action="configs/index-agent.php" method="post" onSubmit="return validlogin();">
			<h2>Sign In With Info4Child</h2>
			<p>
            	<label for="name">User Name</label>
                <input name="username" id="name" type="text">
            </p>
			<p>
            	<label for="email">Password</label>
                <input name="password" id="email" type="password">
            </p>
			<p>
                <label for="service">Choose Your Designation</label>
                <select name="designation" id="service">
                	<option value="designation">Choose your Designation</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="principal">Principal</option>
                    <option value="management">Management</option>
                    <option value="admin">Admin</option>
                </select>
            </p>
			<p>
            	<input type="checkbox" name="chk" id="chk" value="1">
            	<label class="chk" for="chk">Remember Password</label>
            </p>
			<p><button type="submit">Sign In</button></p>
		</form>
	</section>

	<section class="content">
		<blockquote class="quote">
			<p>The ease with which they have transformed us into a tech sawy school is truly commendable, more so, since it works to assist our academic staff by streamlining their student record output.</p>
			<p class="signature">- <span>Cdr. N.K. Sinha </span> / Sanskar Valley, Patna</p>
		</blockquote>
		<!--<section class="columns hp-latest2">
			<article class="col2">
				<a href="#"><img src="images/07.jpg" alt="" class="post-thumbnail"></a>
				<h2><a href="#">Most customizable theme ever has released</a></h2>
				<p>Thanks to MultiPurpose you can now build websites with the lowest cost possible. MultiPurpose's goal is to help you build unique and modern websites fast, easy and with the lowest cost possible. With MultiPurpose you can create many unique style websites for differends needs and purposes. You can now start to build better websites with MultiPurpose.</p>
				<p class="more"><a href="#">Read more</a></p>
			</article><article class="col2">
				<a href="#"><img src="images/08.jpg" alt="" class="post-thumbnail"></a>
				<h2><a href="#">Build better websites with MultiPurpose</a></h2>
				<p>Most customizable responsive HTML5 and CSS3 template ever has released. To build your website you can choose from variety of headers, titles, menus, sliders, color skins, fonts, frames or patterns for boxed version. MultiPurpose can be used to create literally any type of website. The only limit is your imagination. Order MultiPurpose Today!</p>
				<p class="more"><a href="#">Read more</a></p>
			</article>
		</section>-->

		<!--<section class="columns">
			<div class="col23 tabbed">
				<ul class="tabs">
					<li><a href="#art1">Colors</a></li>
					<li><a href="#art2">Menus</a></li>
					<li><a href="#art3">Titles</a></li>
				</ul>
				<article id="art1" class="tab-content">
					<div class="alignleft"><a href="#"><img src="images/09.jpg" alt=""></a></div>
					<h2><a href="#">Most Customizable Ever</a></h2>
					<p>We tested it and, so far there are no themes which have have, so much customization option included. If you find the feature that could help for better customization - we will inlude it in next release, 100% free. We are constantly working to improve the theme with new features according to customers feedback, so feel free to contact us if you need some more useful features or subpages!</p>
					<p class="more"><a href="#">Read more</a></p>
				</article>
				<article id="art2" class="tab-content">
					<div class="alignleft"><a href="#"><img src="images/10.jpg" alt=""></a></div>
					<h2><a href="#">14 Modern Menus</a></h2>
					<p>With MultiPurpose you can build websites with the lowest cost possible. MultiPurpose's goal is to help you build unique and modern websites fast, easy and with the lowest cost possible. With MultiPurpose you can create many unique style websites for differends needs and purposes, so that you can build better websites with MultiPurpose now.</p>
					<p class="more"><a href="#">Read more</a></p>
				</article>
				<article id="art3" class="tab-content">
					<div class="alignleft"><a href="#"><img src="images/11.jpg" alt=""></a></div>
					<h2><a href="#">10 Styles of Titles</a></h2>
					<p>MultiPurpose has got tons of the outstanding features. It is probably the most complete and custmomizable template in the world. It includes for example: 14 predefinied different index pages for multipurpose usage, 12 predefinied different menus, 12 predefinied different ThemeMotive sliders, 10 styles of the headlines and so much more.</p>
					<p class="more"><a href="#">Read more</a></p>
				</article>
			</div>
			<div class="col3 why-us">
				<h2><span>Why MultiPurpose?</span></h2>
				<ul>
					<li>Ultra customizable website template</li>
					<li>Smooth responsive design</li>
					<li>Retina ready template</li>
					<li>Unlimited color possibility</li>
					<li>Premium sliders included in the price</li>
					<li>And so much much more...</li>
				</ul>
			</div>
		</section>-->
	</section>

	<footer>
		
		<section class="bottom">
			<p>Copyright 2014-2015 <a href="#">Info4Child</a> | All rights reserved | Powered By <a href="#">PrinceITHub</a></p>
			<nav class="social">
				<ul>
					<li><a href="#" class="facebook">Facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
					<li><a href="#" class="googleplus">Google+</a></li>					
					<li><a href="#" class="pinterest">Pinterest</a></li>
					<li><a href="#" class="rss">RSS</a></li>
				</ul>
			</nav>
		</section>
	</footer></div>

	<script type="text/javascript" src="lib/js/jquery.js"></script>
	<script type="text/javascript" src="lib/js/scripts.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/ie.js"></script>
	<![endif]-->
	
	
</body>

</html>

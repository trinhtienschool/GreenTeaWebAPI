<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Eternal Beauty Essentials Website Template</title>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="{{URL::asset('css/ie.css')}}" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="index.blade.php"><img src="{{URL::asset('images/logo.png')}}" alt="LOGO"></a>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
						<a href="index.blade.php">home</a>
					</li>
					<li>
						<a href="news.html">What&rsquo;s New</a>
					</li>
					<li>
						<a href="cosmetics.html">Cosmetics</a>
					</li>
					<li>
						<a href="skincare.html">Skincare</a>
					</li>
					<li>
						<a href="fragrance.html">Fragrance</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="blogs.html">Blog</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="contents">
			<div id="main">
				<div id="adbox">
					<img src="{{URL::asset('images/eye-beauty.jpg')}}" alt="Img" height="384" width="700">
					<div class="info">
						<h1>Lorem Ipsum</h1>
						<p>
							Quisque ornare, purus sit amet rutrum gravida.
						</p>
						<a href="index.blade.php" class="shop">Shop Now</a>
					</div>
				</div>
				<ul id="promotions">
					<li>
						<div class="poster">
							<a href="fragrance.html"> <img src="{{URL::asset('images/fragrance.jpg')}}" alt="Img" height="282" width="204"> <span>Special Offers!</span></a>
						</div>
						<a href="fragrance.html">Shop</a>
						<h2>Fragrance</h2>
						<p>
							Nullam avodio iaculis ante, ac placerat tellus turpis ut. neque. In libero sem, vehicula quis feugiat non, malesuada nec tellus.
						</p>
					</li>
					<li>
						<div class="poster">
							<a href="cosmetics.html"> <img src="{{URL::asset('images/cosmetics.jpg')}}" alt="Img" height="282" width="204"></a>
						</div>
						<a href="cosmetics.html">Shop</a>
						<h2>Cosmetics</h2>
						<p>
							Nullam avodio iaculis ante, ac placerat tellus turpis ut. neque. In libero sem, vehicula quis feugiat non, malesuada nec tellus.
						</p>
					</li>
					<li>
						<div class="poster">
							<a href="skincare.html"> <img src="{{URL::asset('images/skin-care.jpg')}}" alt="Img" height="282" width="204"></a> <span class="clearance"></span>
						</div>
						<a href="skincare.html">Shop</a>
						<h2>Skin Care</h2>
						<p>
							Nullam avodio iaculis ante, ac placerat tellus turpis ut. neque. In libero sem, vehicula quis feugiat non, malesuada nec tellus.
						</p>
					</li>
				</ul>
				<div class="sidebar">
					<div id="connect" class="box">
						<h2>Stay Connected</h2>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" class="vimeo"></a>
					</div>
					<div id="newsletter" class="box">
						<h2>Sign up for Newsletter</h2>
						<form action="index.blade.php" method="post">
							<input type="text" value="Email-address" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
							<input type="submit" value="Subscribe">
						</form>
						<p>
							Nullam aliquam, lorem vitae ornare eleifend, diam odio iaculis ante, ac placerat tellus.
						</p>
					</div>
				</div>
				<div id="updates" class="box">
					<h2>Latest Blogs</h2>
					<ul>
						<li>
							<img src="{{URL::asset('images/curls.jpg')}}" alt="Img" height="90" width="136">
							<div class="links">
								<h4>Nullam avodio iaculis</h4>
								<a href="{{URL::asset('index.blade.php')}}" class="time">05 July 2012</a> <a href="index.blade.php" class="comments">2 Comments</a>
							</div>
							<p>
								In hac habitasse platea dictumst. Aenean tristique magna ac metus vestibulum quis condimentum eros volutpat. <a href="blog.html">Read More.</a>
							</p>
						</li>
						<li>
							<img src="{{URL::asset('images/comb.jpg')}}" alt="Img" height="90" width="136">
							<div class="links">
								<h4>Nullam avodio iaculis</h4>
								<a href="index.blade.php" class="time">05 July 2012</a> <a href="index.blade.php" class="comments">2 Comments</a>
							</div>
							<p>
								In hac habitasse platea dictumst. Aenean tristique magna ac metus vestibulum quis condimentum eros volutpat. <a href="blog.html">Read More.</a>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div id="sidebar">
				<div class="cart">
					<a href="cart.html">View Cart</a> <span>Your cart<br> is empty</span>
				</div>
				<div class="news">
					<h2>What&rsquo;s New</h2>
					<ul>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/makeUp.jpg')}}" alt="Img" height="111" width="178"> Nullam avodio iaculis</a>
						</li>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/lipsticks-refill.jpg')}}" alt="Img" height="111" width="178"> Lorem ipsum dolor sit</a>
						</li>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/powders.jpg')}}" alt="Img" height="111" width="178"> Lorem ipsum dolor sit</a>
						</li>
					</ul>
				</div>
				<div class="box">
					<h2>Featured Items</h2>
					<ul>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/lipsticks-small.png')}}" alt="Img" height="111" width="178"> Nullam avodio iaculis</a>
						</li>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/powder-small.png')}}" alt="Img" height="111" width="178"> Lorem ipsum dolor sit</a>
						</li>
						<li>
							<a href="news.html"> <img src="{{URL::asset('images/lipsticks2-small.png')}}" alt="Img" height="111" width="178"> Lorem ipsum dolor sit</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<ul class="navigation">
				<li class="selected">
					<a href="index.blade.php">Home</a>
				</li>
				<li>
					<a href="news.html">What&rsquo;s New</a>
				</li>
				<li>
					<a href="cosmetics.html">Cosmetics</a>
				</li>
				<li>
					<a href="skincare.html">Skincare</a>
				</li>
				<li>
					<a href="fragrance.html">Fragrance</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="blogs.html">Blog</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Eternal Beauty Essentials 2012. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
	<title>News  Berita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!--start-main-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><h1>Berita Lauwba</h1></a>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="">
					</form>
				</div>
				<div class="social">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="facebook twitter"> </a></li>
						<li><a href="#" class="facebook chrome"> </a></li>
						<li><a href="#" class="facebook in"> </a></li>
						<li><a href="#" class="facebook beh"> </a></li>
						<li><a href="#" class="facebook vem"> </a></li>
						<li><a href="#" class="facebook yout"> </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<!--head-bottom-->
		<div class="head-bottom">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="reviews.html">Reviews</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="tech.html">Action</a></li>
								<li><a href="tech.html">Action</a></li>
								<li><a href="tech.html">Action</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="singlepage.html">Action</a></li>
								<li><a href="singlepage.html">Action</a></li>
								<li><a href="singlepage.html">Action</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Science <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="singlepage.html">Action</a></li>
								<li><a href="singlepage.html">Action</a></li>
								<li><a href="singlepage.html">Action</a></li>
							</ul>
						</li>
						<li><a href="design.html">Design</a></li>
						<li><a href="business.html">Business</a></li>
						<li><a href="world.html">World</a></li>
						<li><a href="forum.html">Forum</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	<!--head-bottom-->
</div>	
<!-- banner -->
<div class="banner">
	<div class="container">
		<!-- <h2>Contrary to popular belief, Lorem Ipsum simply</h2>
		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
		<a href="#">READ ARTICLE</a> -->
	</div>
</div>
<!-- technology -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="tech-no">

				<!-- technology-top -->
				<!-- technology-top -->
				<div class="soci">
					<ul>
						<li><a href="#" class="facebook-1"> </a></li>
						<li><a href="#" class="facebook-1 twitter"> </a></li>
						<li><a href="#" class="facebook-1 chrome"> </a></li>
						<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
					</ul>
				</div>
				<div class="tc-ch">
					<?php
					include "koneksi.php";
					$sql = mysqli_query($con, "SELECT * FROM tb_berita_galeri");
					while ($row = mysqli_fetch_array($sql)){
						?>
						<div class="tch-img">
							<a href="index.php"><img src="/Admin_Faris/images/<?php echo $row['foto'];?>" class="img-responsive" alt=""/></a>
						</div>
						<a class="blog blue" href="index.php">Technology</a>
						<h3><?php echo $row['judul_foto'];?></h3>
						<p><?php echo $row['ket_foto'];?></p>

						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
							</ul>
						</div>
						<?php } ?>
					</div>
					<!-- technology-top -->
				</div>

			</div>
			<!-- technology-right -->
			<div class="col-md-3 technology-right">
				<div class="blo-top">
					<div class="tech-btm">
						<img src="images/banner1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
						<h4>Sign up to our newsletter</h4>
						<p>Pellentesque dui, non felis. Maecenas male</p>
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>	
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
						<h4>Top stories of the week </h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>

			</div>
			<div class="clearfix"></div>
			<!-- technology-right -->
		</div>
	</div>
	<!-- technology -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h6>THIS LOOKS GREAT</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt consectetur adipisicing elit,</p>
			</div>
			<div class="col-md-4 footer-middle">
				<h4>Twitter Feed</h4>
				<div class="mid-btm">
					<p>Consectetur adipisicing</p>
					<p>Sed do eiusmod tempor</p>
					<a href="https://w3layouts.com/">https://w3layouts.com/</a>
				</div>

				<p>Consectetur adipisicing</p>
				<p>Sed do eiusmod tempor</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>

			</div>
			<div class="col-md-4 footer-right">
				<h4>Quick Links</h4>
				<li><a href="#">Eiusmod tempor</a></li>
				<li><a href="#">Consectetur </a></li>
				<li><a href="#">Adipisicing elit</a></li>
				<li><a href="#">Eiusmod tempor</a></li>
				<li><a href="#">Consectetur </a></li>
				<li><a href="#">Adipisicing elit</a></li>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
	<!-- footer-bottom -->
	<div class="foot-nav">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="videos.html">Videos</a></li>
				<li><a href="reviews.html">Reviews</a></li>
				<li><a href="tech.html">Tech</a></li>
				<li><a href="singlepage.html">Culture</a></li>
				<li><a href="singlepage.html">Science</a></li>
				<li><a href="design.html">Design</a></li>
				<li><a href="business.html">Business</a></li>
				<li><a href="world.html">World</a></li>
				<li><a href="forum.html">Forum</a></li>
				<li><a href="contact.html">Contact</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
	<!-- footer-bottom -->
	<div class="copyright">
		<div class="container">
			<p>© 2016 Business_Blog. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	

</body>
</html>
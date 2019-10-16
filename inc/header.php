<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php 
     $db = new Database();
     $fm= new Format();
 ?>    
<!DOCTYPE html>
<html lang="zxx">

<head>
<?php
 if(isset($_GET['pageid'])){
	 $pagetitleid=$_GET['pageid'];
	 $query="SELECT * FROM tbl_page WHERE id='$pagetitleid'";
	 $pages=$db->select($query);
	 if($pages){
		 while($result=$pages->fetch_assoc()){ ?>
		 <title><?php echo $result['name'];?>-<?php echo TITLE;?></title>
		 <?php } } } else { ?>
			<title><?php echo $fm->title();?>-<?php echo TITLE;?></title>
		 <?php } ?>
	 
 
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Dog Home Responsive , Bootstrap, Flat , Android Compatible, Smartphone Compatible, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
    c<link rel="stylesheet" href="style.css">
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css1/bootstrap.css">
	<link rel="stylesheet" href="css1/blog.css">
	<!--<link rel="stylesheet" href="css/css_slider.css">
	<link rel="stylesheet" href="css/blog.css"-->
	
	<!-- Bootstrap-Core-CSS -->
	<link href="css1/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css1/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css1/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
					<?php
					$query="SELECT * FROM title_slogan WHERE id='1'";
					$blog_title=$db->select($query);
					if($blog_title){
						while($result = $blog_title->fetch_assoc()){
					?>		
						<h2><a class="" href="animallover.php"><?php echo $result['title']; ?></h2>
						
						<p><?php echo $result['slogan']; ?></p>
						<?php } } ?>
					</div>
					<!-- //logo -->

					<!-- nav -->
					<div class="nav_w3ls">
					<?php
					  $path = $_SERVER['SCRIPT_FILENAME'];
					  $currentpage= basename($path,'.php');
					  ?>
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a 
								<?php if($currentpage=='animallover') {echo 'id="active"'; }?>
								href="animallover.php" class="active">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a 
								<?php if($currentpage=='about') {echo 'id="active"'; }?>
								href="about.php">About Us</a></li>
								<li><a 
								<?php if($currentpage=='gallery') {echo 'id="active"'; }?>
								href="gallery.php">Gallery</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a 
										<?php if($currentpage=='blog') {echo 'id="active"'; }?>
										href="blog.php" class="drop-text">Blog</a></li>
										<li><a href="#what" class="drop-text">What We do</a></li>
										<li><a href="#testimonials" class="drop-text">Testimonials</a></li>
									</ul>
								</li>
								<?php
                                $query="SELECT * FROM tbl_page";
                                $pages=$db->select($query);
                                if($pages){
                                    while($result=$pages->fetch_assoc()){
                                ?>
                            <li><a 
							<?php
							if (isset($_GET['pageid']) && $_GET['pageid']==$result['id']){
                               echo 'id="active"';
							}
							?>
							href="page.php?pageid=<?php echo $result['id'];?>"><?php echo $result['name'];?></a></li>   
                                    <?php } } ?> 
								<li><a
								<?php if($currentpage=='contact') {echo 'id="active"'; }?>
								 href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
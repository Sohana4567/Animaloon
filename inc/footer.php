<footer class="py-5" style="height:2000;width:2000px;position:absolute;left:-300px">
		<div class="container py-xl-4">
			<div class="row footer-top">
				<div class="col-md-5 footer-grid_section_1its">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-6">
							<h2 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">About Us</h2>
							<p>Sed ut perspiciatis unde omnis iste natus error sit.Error sit antium dolorts remq hymue laud.</p>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-6 mt-lg-0 mt-md-4 mt-sm-0 mt-4">
							<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Who We Are</h3>
							<p>Error sit antium dolorts remq hymue laud.Sed ut perspiciatis unde omnis iste natus error sit.</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-3 footer-grid_section_1its my-md-0 my-5">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Us</h3>
					<div class="contact-info">
						<div class="footer-style-w3ls">
							<h4 class="text-li mb-2">Phone</h4>
							<p>+121 098 8907 9987</p>
						</div>
						<div class="footer-style-w3ls my-4">
							<h4 class="text-li mb-2">Email </h4>
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="footer-style-w3ls">
							<h4 class="text-li mb-2">Location</h4>
							<p>Honey Avenue, New York City</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-grid_section_1its">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>
					<p>Be the first to get latest news and offers!<br>Sed ut perspiciatis unde omnis.</p>
					<?php
	             	if($_SERVER['REQUEST_METHOD']=='POST'){
						$email=$fm->validation($_POST['email']);
						$email=mysqli_real_escape_string($db->link,$email);
						$errore="";
						if(empty($email)){
							$errore="Email must not be empty !";
						}
						else{
							$query="INSERT INTO  tbl_subscribe(email)VALUES('$email')";
							$inserted_rows = $db->insert($query);
							if($inserted_rows){
								$msg="Message Sent Successfully.";
							}else{
								$error="Message not sent!";
							}
			
						}
					}
				?>		
				<style>
		        .cuserror{color:red;}
	         	</style> 
					<form action="#" method="post" class="subscribe_form mt-4">
					<?php
						if(isset($errore)){
						 echo "<span class='cuserror'>$errore</span>";
						}
						?>
						<input class="form-control" type="email" name="email" placeholder="Enter your email..." required="">
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					<!-- social icons -->
					<div class="agileinfo_social_icons mt-4">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Connect With Social</h3>
						<?php
                $query="SELECT * FROM tbl_social WHERE id='1'";
                $socialmedia = $db->select($query);
                if($socialmedia){
                    while($result=$socialmedia->fetch_assoc()){
                ?>     
						<ul class="agileits_social_list list-unstyled">
							<li>
								<a href="<?php echo $result['fb'];?>" class="w3_agile_facebook">
									<span class="fa fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="<?php echo $result['tw'];?>" class="agile_twitter">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li>
								<a href="<?php echo $result['Ln'];?>" class="w3_agile_linkedin">
									<span class="fa fa-linkedin"></span>
								</a>
							</li>
							<li class="ml-2">
								<a href="<?php echo $result['gp'];?>" class="w3_agile_google">
									<span class="fa fa-google-plus"></span>
								</a>
							</li>
						</ul>
					<?php } } ?>		
					</div>
					<!-- social icons -->
				</div>
				
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->


	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->
	<script id="dsq-count-scr" src="//login-8.disqus.com/count.js" async></script>

</body>

</html>
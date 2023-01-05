<footer class="main-footer">
	<div class="container" data-aos="fade-up" data-aos-duration="2000">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-contact">
					<img src="assets/images/Logomish2.png" width="150">
					<p>1# website design and development company in USA</p>
					<h3>Get in Touch</h3>
					<a href="tel:+1(972)428-2531"><i class="fas fa-phone"></i>+1(972)428-2531</a>
					<a href="mailto:team@logomish.com"><i class="fas fa-envelope-open-text"></i>team@logomish.com</a>
					<a href="javascript:;"><i class="fas fa-map-marked-alt"></i>26 Broadway Suite 934 New York</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="quick-link footer-quick-link">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.php"><i class="fa fa-stop"></i> Home</a></li>
						<li><a href="about.php"><i class="fa fa-stop"></i> About Us</a></li>
						<li><a href="portfolio.php"><i class="fa fa-stop"></i> Portfolio</a></li>
						<li><a href="review.php"><i class="fa fa-stop"></i> Reviews</a></li>
						<li><a href="pricing.php"><i class="fa fa-stop"></i> Packages</a></li>
						<li><a href="contact.php"><i class="fa fa-stop"></i> Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4">
				<div class="services-link footer-quick-link">
					<h3>Services</h3>
					<ul>
						<li><a href="logo.php"><i class="fa fa-stop"></i> Logo Design </a></li>
						<li><a href="website.php"><i class="fa fa-stop"></i> Website</a></li>
						<li><a href="animation.php"><i class="fa fa-stop"></i> Animation</a></li>
						<li><a href="mobile-app.php"><i class="fa fa-stop"></i> Mobile Apps </a></li>
						<li><a href="digital-marketing.php"><i class="fa fa-stop"></i> Digital Marketing</a></li>
						<li><a href="print-design.php"><i class="fa fa-stop"></i> Print Design</a></li>
						<li><a href="seo.php"><i class="fa fa-stop"></i> SEO</a></li>
					</ul>
				</div>
			</div>
			<!-- <div class="col-lg-3 col-md-4 col-sm-4 pl-lg-0">
				<div class="footer-link footer-quick-link">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="privacy.php"><i class="fa fa-stop"></i> Privacy & Security </a></li>
						<li><a href="privacy.php"><i class="fa fa-stop"></i> Terms & Conditions</a></li>
					</ul>
				</div>
			</div> -->
			<div class="col-lg-2 col-md-4 col-sm-4 pl-lg-0">
				<div class="footer-solutions footer-quick-link">
					<h3>Our Awards</h3>
					<img src="assets/images/solutions-img.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</footer>

<section class="main-copyright">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 col-md-8 col-sm-8">
				<div class="copyright-left">
					<p>Copyright © 2021,  Logomish All Rights Reserved. </p>
					<ul>
					  <li class="first"><a href="privacy.php">Privacy Policy</a></li>
			          <li class="last"><a href="terms.php">Terms Of Conditions</a></li>
			      	</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4">
				<div class="soical-right">
					<ul>
						<li><a href="" target="blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
						<li><a href="" target="blank"><i class="fab fa-instagram"></i><span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="assets/js/plugin.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/phpForm.js"></script>
<script>
	function changes22(pid, title, price) {
        //alert(title);
        $("input[name='package_id']").val(pid);
        $("input[name='package_name']").val(title);
        $("input[name='package_price']").val(price);
    }

	var refreshButton = document.querySelector(".refresh-captcha");
		refreshButton.onclick = function() {
		document.querySelector(".captcha-image").src = './captcha.php?' + Date.now();
	}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.9.0/jquery.validate.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- <script src="assets/js/plugin.js"></script> --z>
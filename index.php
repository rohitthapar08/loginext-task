<?php require_once 'controller/country.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="plugins/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugins/fullPage.js/dist/jquery.fullPage.min.css" />
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div id="fullpage">
		<div class="section _s1">
			<div class="main-menu">
				<div class="container">
					<header>
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<div class="navbar-header">
									<a class="navbar-brand" href="#">GET</a>
								</div>
								<p class="navbar-text pull-right">
									<a class="" data-toggle="modal" data-target="#demo_form_modal">Demo</a>
								</p>
								<p class="navbar-text pull-right">
									<a class="" data-toggle="modal" data-target="#login_modal">Login</a>
								</p>
							</div>
						</nav>
					</header>
				</div>
			</div>
			<div class="container">
				<div class="_intr">
					<div><span class="_focus">Lorem Ipsum<span></div>
					<h1>Lorem ipsum dolor sit amet.</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					<a href="#" id="_td1">TRY DEMO</a>
				</div>
			</div>
		</div>
		<div class="section _s2">
			<div class="container">
				<div class="col-md-6"><img src="assets/images/tab.png" class="img-responsive" alt="tab image"></div>
				<div class="col-md-6 _s2_txt">
					<h2>Cum sociis natoque penatibus et magnis dis parturient montes,</h2>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes,</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
					</ul>
					<a href="#" id="_td2">TRY DEMO</a>
				</div>
			</div>
		</div>
		<div class="section _s3">
			<div class="container">
				<h3 class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
				<div class="slidex">
					<div class="row">
						<div class="owl-carousel">
							<div class="item">
								<img src="assets/images/slider-bg.jpg" class="img-responsive">
								<div class="slide_txt"><div>Lorem ipsum dolor sit amet</div><p>Lorem ipsum dolor sit amet</p></div>
							</div>
							<div class="item">
								<img src="assets/images/slider-bg.jpg" class="img-responsive">
								<div class="slide_txt"><div>Lorem ipsum dolor sit amet</div><p>Lorem ipsum dolor sit amet</p></div>
							</div>
							<div class="item">
								<img src="assets/images/slider-bg.jpg" class="img-responsive">
								<div class="slide_txt"><div>Lorem ipsum dolor sit amet</div><p>Lorem ipsum dolor sit amet</p></div>
							</div>
							<div class="item">
								<img src="assets/images/slider-bg.jpg" class="img-responsive">
								<div class="slide_txt"><div>Lorem ipsum dolor sit amet</div><p>Lorem ipsum dolor sit amet</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>&copy;2017 Great Event Team | Terms & conditions | privacy policy</footer>
		</div>
	</div>

	<!-- Modal for Demo -->
	<div class="modal fade" id="demo_form_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<form id="demo_form" method="post" action="controller/demo.php">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enter the details</h4>
				</div>
				<div class="modal-body">
					<h4 id="demo_notify"></h4>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<!-- <label for="nm">First Name</label> -->
								<input type="text" class="form-control" id="nm" name="fnm" placeholder="First Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<!-- <label for="nm">Last Name</label> -->
								<input type="text" class="form-control" id="nm" name="lnm" placeholder="Last Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<!-- <label for="ph">contact number</label> -->
								<input type="text" class="form-control" id="ph" name="ph" placeholder="Contact number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<!-- <label for="ph">Country</label> -->
								<select class="form-control" name="country">
									<option value="-1">Select Country</option>
									<?php foreach($countries as $c): ?>
										<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<!-- <label for="ml">Email</label> -->
						<input type="email" class="form-control" id="ml" name="ml" placeholder="email Address">
					</div>
					<div class="form-group">
						<!-- <label for="ml">Subject</label> -->
						<input type="text" class="form-control" id="demo_subject" name="demo_subject" placeholder="Subject">
					</div>
					<div class="form-group">
						<!-- <label for="ml">Email</label> -->
						<textarea class="form-control" name="demo_msg"  placeholder="Message"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
		</div>
	</div>

	<!-- Modal for login -->
	<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal">
		<div class="modal-dialog" role="document">
			<form id="login_form" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<h4 id="login_notify"></h4>
					<div class="form-group">
						<label for="usr">Username</label>
						<input type="text" class="form-control" id="usr" name="usr" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="text" class="form-control" id="pwd" name="pwd" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>
			</div>
		</form>
		</div>
	</div>

	<script src="plugins/jquery-3.2.1.min.js"></script>
	<script src="plugins/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="plugins/fullPage.js/dist/jquery.fullpage.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
	<script src="plugins/jquery-validation-1.16.0/dist/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

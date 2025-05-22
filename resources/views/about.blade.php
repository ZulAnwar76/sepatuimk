<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>SuwandiSecBrand</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
			<div class="container">
			  <a class="navbar-brand" href="/">SuwandiSecBrand<span>.</span></a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				  <li class><a class="nav-link" href="/">Home</a></li>
			<li><a class="nav-link" href="shop">Shop</a></li>
				  <li class="nav-item active"><a class="nav-link" href="about">About us</a></li>
				  <li><a class="nav-link" href="contact">Contact us</a></li>
			@if (!Auth::check())
				<li><a class="nav-link" href="{{ route('login.show') }}">Login</a></li>
				<li><a class="nav-link" href="{{ route('register.show') }}">Register</a></li>
			@else
				<!-- If user is logged in, show Logout Link -->
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
	<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	
			@endif
				</ul>
				<ul class="navbar-nav ms-5">
					<li class="nav-item">
					  <a class="nav-link" href="user"><img src="images/user.svg" alt="User" width="24"></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="history">
						  <img src="images/history.svg" alt="History" width="24" style="filter: invert(1);">
						</a>
					  </li>		
				  </ul>		
			  </div>
			</div>
		  </nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Selamat Datang</h1>
								<p class="mb-4">Halo teman teman pelanggan setia di SuwandiSecBrand disini kami menawarkan sepatu import dengan harga yang murah dan dengan kualitas terbaik kalau mau pantau live kita bisa di follow akun sosmed dibawah ya</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="shop" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/logo.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section" style="display: flex; justify-content: center; align-items: center; text-align: center; min-height: 100vh;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Menyediakan berbagai macam sepatu berkualitas dengan harga terjangkau dan terpercaya</p>
						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Truck Icon" class="img-fluid">
									</div>
									<h3>Fast Shipping</h3>
									<p>Proses pengiriman yang cepat.</p>
								</div>
							</div>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Shop Icon" class="img-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Proses pembelanjaan yang mudah anti ribet.</p>
								</div>
							</div>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Support Icon" class="img-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Admin yang selalu standby jika terjadi masalah ataupun kendala.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		


		<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Kolom Logo dan Teks -->
            <div class="col-lg-4 text-center">
                <div class="mb-4 footer-logo-wrap">
                    <a href="#" class="footer-logo">SuwandiSecBrand<span>.</span></a>
                </div>
                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TransNzoia County || County Admin</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  	<link href="css/nivo-lightbox.css" rel="stylesheet" />
  	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	  <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
        <div class="row">
					<div class="col-sm-4 col-md-4">
					  <p class="bold text-left">Monday - Friday, 8am to 5pm </p>
					</div>
          <div class="col-sm-4 col-md-">
            <p class="bold text-center">Today: {{ Carbon\Carbon::now()->format('l j F Y')}} </p>
					</div>
					<div class="col-sm-4 col-md-4">
					<p class="bold text-right">County 026 +254 724 122411 </p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="/">
                  <img src="img/logo.gif" alt="" width="150" height="40" />
              </a>
          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="/">Register</a></li>
				<li><a href="/">Help?</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 imond">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            <br><br>
					<h2  class="h-ultra imondwhite">Login to get ACCESS</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light imondwhite">We Value Security, </h4>
					</div>
						<div class="well well-trans">
              <form class="form-horizontal" role="form" method="POST" action="/login">
                    {{ csrf_field() }}

                    @if( session('error') )
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="" href="/system/register">
                                Not yet Registered?
                            </a>
                        </div>
                    </div>
                </form>
						</div>


					</div>
					<div class="col-lg-6 ">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/jpg1.jpg" class="img-responsive imgradius" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Ministry of Education</h5>
						<p>
						The ministry of education in Trans Nzoia County is a vibrant ministry full of activities and innovations, and this portal is one of them
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Service Charter</h5>
						<ul>
							<li><a href="#">Timely</a></li>
							<li><a href="#">Accountable</a></li>
							<li><a href="#">Frinedly</a></li>
							<li><a href="#">Courteous</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>CEC</h5>
						<p>
						"You Know what you need, come state it and we will do our best to deliver beyond your expectattion"
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Friday, 8am to 5pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +254 700 000000
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> education@transnzoiacounty.co.ke
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>The office of the CEC is located near the county offices</p>

					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
							<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
            <strong>Copyright &copy; 2017 Trans Nzoia County.</strong> All rights
            reserved.
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
              <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Developed</a> by <a href="imond.co.ke">iMond Developers</a>
            </div>
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>

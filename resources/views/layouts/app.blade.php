<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TransNzoia County || County Admin</title>

    <!-- css -->
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  	<link rel="stylesheet" type="text/css" href="{{ asset ('plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
  	<link href="{{ asset ('css/nivo-lightbox.css')}}" rel="stylesheet" />
  	<link href="{{ asset ('css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  	<link href="{{ asset ('css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
    <link href="{{ asset ('css/owl.theme.css')}}" rel="stylesheet" media="screen" />
	  <link href="{{ asset ('css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset ('css/style.css')}}" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="{{ asset ('bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="{{ asset ('color/default.css')}}" rel="stylesheet">

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
            <p class="bold text-center">{{ Carbon\Carbon::now()->format('l j F Y')}} </p>
					</div>
					<div class="col-sm-4 col-md-4">
					<p class="bold text-right">Call us now +254 700 000000</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Service</a></li>
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

            @yield('content')

					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/dummy/img-1.png" class="img-responsive" alt="" />
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
  <script src="{{ asset ('js/jquery.min.js')}}"></script>
  <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.easing.min.js')}}"></script>
	<script src="{{ asset ('js/wow.min.js')}}"></script>
	<script src="{{ asset ('js/jquery.scrollTo.js')}}"></script>
	<script src="{{ asset ('js/jquery.appear.js')}}"></script>
	<script src="{{ asset ('js/stellar.js')}}"></script>
	<script src="{{ asset ('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
	<script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset ('js/nivo-lightbox.min.js')}}"></script>
  <script src="{{ asset ('js/custom.js')}}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE; chrome=1" />
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

		<title>
		</title>

		<meta name="description" content="M_DESCRIPTION">
		<meta name="keywords" content="M_KEYWORDS">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/images/galleries/style/bootstrap-3.3.6/css/bootstrap.min.css">

		<!-- CSS Animations -->
		<link rel="stylesheet" href="/images/galleries/style/css/animate.css">

		<!-- Font-Awesome CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,400,400i,600,600i,700,700i" rel="stylesheet">

		<!-- Start Stylesheet -->

	</head>

	<body>
		<div id="styleContainer" class="bottom">
			<a name="top" id="top"></a>
			<a id="skipNav" class="btn btn-default btn-lg" href="#content">Skip to content</a>
			<div id="topbar">
				<div class="container">
					<div class="social hidden-xs">
						<a target="_blank" title="Facebook" href="{facebook}">
							<div class="fa fa-facebook"></div>
						</a>
						<a target="_blank" title="Twitter" href="{twitter}">
							<div class="fa fa-twitter"></div>
						</a>
						<a target="_blank" title="LinkedIn" href="{linkedin}">
							<div class="fa fa-linkedin"></div>
						</a>
						<a target="_blank" title="Google Plus" href="{google-plus}">
							<div class="fa fa-google-plus"></div>
						</a>
					</div>
					<div class="toplinks">
						<a href="tel:{phone}">
							<div class="fa fa-phone color-1"></div>
							<span class="hidden-xs">
								{phone}
							</span>
						</a>
						<a href="mailto:{email}">
							<div class="fa fa-envelope color-1"></div>
							<span class="hidden-xs">
								{email}
							</span>
						</a>
						<a href="#modalLogin" data-toggle="modal">
							<div class="fa fa-lock color-1"></div>
							<span class="hidden-xs">
								Login
							</span>
						</a>
					</div>
				</div>
			</div>

			<header>
				<div class="container">
					<div class="margin-20 clearfix">
						<a href="index.php" id="logo">
							<!-- Start Header -->
						</a>
						<a href="#" id="Toggle" class="hidden-lg fa fa-2x fa-navicon color-1" title="Menu">
						</a>
					</div>
					<nav id="Nav">
						<!-- Start Navbar -->
					</nav>
				</div>
			</header>

			<section id="homeSlide" class="carousel carousel-fade slide" data-interval="6000" data-ride="carousel" data-pause="false">
				<div class="carousel-inner" role="listbox">
					<div class="item active" style="background-image:url(/images/galleries/style/636/videos/clouds.jpg);">
						<video class="visible-lg visible-md" loop muted autoplay poster="/images/galleries/style/636/videos/clouds.jpg">
							<source src="/images/galleries/style/636/videos/clouds.mp4" type="video/mp4">
						</video>
						<div class="align">
							<div class="caption">
								<h2>
									<span class="outline">
										<span class="color-1">
											The Sky's
										</span>
										<span class="color-2">
											The Limit
										</span>
									</span>
								</h2>
								<a class="btn btn-primary btn-lg margin-top-30" href="services.php">Learn About Our Accounting Services</a>
							</div>
						</div>
					</div>
					<div class="item" style="background-image:url(/images/galleries/style/636/images/slide-2.jpg);">
						<div class="align">
							<div class="caption">
								<h2>
									<span class="outline">
										<span class="color-1">
											See Beyond
										</span>
										<span class="color-2">
											the Numbers
										</span>
									</span>
								</h2>
								<a class="btn btn-primary btn-lg margin-top-30" href="newsletter.php">Stay Updated With Our Newsletter</a>
							</div>
						</div>
					</div>
					<div class="item" style="background-image:url(/images/galleries/style/636/videos/accounting.jpg);">
						<video class="visible-lg visible-md" loop muted autoplay poster="/images/galleries/style/636/videos/accounting.jpg">
							<source src="/images/galleries/style/636/videos/accounting.mp4" type="video/mp4">
						</video>
						<div class="align">
							<div class="caption">
								<h2>
									<span class="outline">
										<span class="color-1">
											Unlimited
										</span>
										<span class="color-2">
											Potential
										</span>
									</span>
								</h2>
								<a class="btn btn-primary btn-lg margin-top-30" href="services.php">Learn About Our Accounting Services</a>
							</div>
						</div>
					</div>
					<div class="item" style="background-image:url(/images/galleries/style/636/images/slide-4.jpg);">
						<div class="align">
							<div class="caption">
								<h2>
									<span class="outline">
										<span class="color-1">
											Support
										</span>
										<span class="color-2">
											You Deserve
										</span>
									</span>
								</h2>
								<a class="btn btn-primary btn-lg margin-top-30" href="firmprofile.php">Get To Know {company_name}</a>
							</div>
						</div>
					</div>
				</div>
				<ol class="carousel-indicators">
					<li data-target="#homeSlide" data-slide-to="0" class="active"></li>
					<li data-target="#homeSlide" data-slide-to="1"></li>
					<li data-target="#homeSlide" data-slide-to="2"></li>
					<li data-target="#homeSlide" data-slide-to="3"></li>
				</ol>
				<div class="line"></div>
			</section>

			<section class="bg-white" id="content" tabindex="0">
				<div class="container text-center">
					<div class="margin-60">
						<h2>{city}, {state} {firm_type},
							<span class="bg-color-1">&nbsp;{company_name}&nbsp;</span>
						</h2>
						<p class="lead">We are a full-service {firm_type} firm licensed in {state}. We offer a broad range of services for business owners, executives, and independent professionals. We are affordable, experienced, and friendly.</p>
						<a href="#modalConsult"  data-toggle="modal" class="btn btn-default btn-lg margin-top-10">
							Schedule a Consultation
						</a>
						&nbsp;
						<a href="#modalSubscribe" data-toggle="modal" class="btn btn-primary btn-lg margin-top-10">
							Subscribe To Our Newsletter
						</a>
					</div>
				</div>
			</section>

			<section class="parallax" style="background-image:url(/images/galleries/style/636/images/parallax-1.jpg)" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="overlay">
					<div class="container margin-60 text-center">
						<h2 class="strong">Information at Your Fingertips</h2>
						<hr class="title bg-color-1">
						<p class="lead">Please call us at {phone} today - we'll be happy to offer you a <strong>free consultation.</strong> Thanks for visiting!</p>
						<div class="row" id="information">
							<div class="col-md-3 col-sm-6">
								<a href="firmprofile.php" class="box margin-top-30" title="Get To know Us">
									<div class="front bg-white">
										<div class="fa fa-users fa-4x color-1"></div>
										<h3>Get To know Us</h3>
									</div>
									<div class="back bg-color-1">
										<h3>Get To Know Us</h3>
										<p>Our team has been helping clients in the Everett, WA area for years.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="newsletter.php" class="box margin-top-30" title="Get Informed">
									<div class="front bg-white">
										<div class="fa fa-paperclip fa-4x color-1"></div>
										<h3>Get Informed</h3>
									</div>
									<div class="back bg-color-1">
										<h3>Get Informed</h3>
										<p>Our monthly newsletter provides timely articles to help you achieve your financial goals.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="services.php" class="box margin-top-30" title="Get Help">
									<div class="front bg-white">
										<div class="fa fa-warning fa-4x color-1"></div>
										<h3>Get Help</h3>
									</div>
									<div class="back bg-color-1">
										<h3>Get Help</h3>
										<p>We offer services for business owners, executives, and individuals.</p>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="contact.php" class="box margin-top-30" title="Contact Us">
									<div class="front bg-white">
										<div class="fa fa-comment fa-4x color-1"></div>
										<h3>Contact Us</h3>
									</div>
									<div class="back bg-color-1">
										<h3>Contact Us</h3>
										<p>Get in touch with us at {email} or call us at {phone}.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-white">
				<div class="container">
					<div class="margin-60 text-center">
						<h2>Learn About {company_name}</h2>
						<hr class="title bg-color-1">
						<p class="lead">If you are looking for a blend of personal service and expertise, you have come to the right place! We offer a broad range of services for business owners, executives and independent professionals. Our rates are affordable. We are experienced and friendly.</p>
						<button class="btn btn-primary btn-lg margin-top-10" data-target="#modalConsult" data-toggle="modal">Contact us for a <strong>free consultation</strong>.</button>
						<div class="row" id="services">
							<a class="col-sm-4 margin-top-60" href="taxservices.php">
								<div class="fa fa-folder-open fa-4x"></div>
								<h3>Tax Services</h3>
								<p>We pride ourselves on being very efficient, affordable, and of course, extremely discreet.</p>
								<u>Read More...</u>
							</a>
							<a class="col-sm-4 margin-top-60" href="bizservices.php">
								<div class="fa fa-globe fa-4x"></div>
								<h3>Business Services</h3>
								<p>We take care of your business for you, so you can get back to the job of running your business.</p>
								<u>Read More...</u>
							</a>
							<a class="col-sm-4 margin-top-60" href="indservices.php">
								<div class="fa fa-home fa-4x"></div>
								<h3>Services For Individuals</h3>
								<p>You get one-on-one guidance that helps manage risk and improve performance.</p>
								<u>Read More...</u>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="parallax" style="background-image:url(/images/galleries/style/636/images/parallax-2.jpg)" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="overlay">
					<div class="container margin-60 text-center">
						<h2 class="strong">Days until April 15</h2>
						<hr class="title bg-color-1">
						<div id="defaultCountdown"></div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 margin-60" id="tabFaqs">
							<h3 class=" h2 text-center">FAQs</h3>
							<hr class="title bg-color-1">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<a class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="fa fa-plus"></div>
											<div class="fa fa-minus"></div>
											My company's books are a nightmare. I don't even know where to start!
										</a>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											We take care of your books for you, so you can get back to the job of running your business and generating profits. <br>
											<a href="smallbiz.php" title="{city}, {state} Small Business Accounting">Learn More...</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<div class="fa fa-plus"></div>
											<div class="fa fa-minus"></div>
											I'm spending all my time managing payroll for my employees.
										</a>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											We offer payroll solutions that meet your business's needs and enable you to spend time doing what you do best--running your company. <br>
											<a href="payrollservice.php" title="{city}, {state} Payroll Processing">Learn More...</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<div class="fa fa-plus"></div>
											<div class="fa fa-minus"></div>
											I use Quickbooks, but I'm not sure I'm getting the most out of the software.
										</a>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											We offer a variety of services to help make sure that you are taking full advantage of Quickbooks' many features. <br>
											<a href="qbmain.php" title="{city}, {state} Quickbooks training">Learn more...</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<div class="fa fa-plus"></div>
											<div class="fa fa-minus"></div>
											I made a mistake on my taxes.
										</a>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body">
											We're here to help you resolve your tax problems and put an end to the misery that the IRS can put you through. <br>
											<a href="taxproblems.php" title="{city}, {state} IRS Problem Resolution">Learn More...</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<div class="fa fa-plus"></div>
											<div class="fa fa-minus"></div>
											I need help planning my family's financial future.
										</a>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="panel-body">
											We offer one-on-one guidance and a comprehensive financial plan that helps manage risk, improve performance, and ensure the growth and longevity of your wealth. <br>
											<a href="personalfinplan.php" title="{city}, {state} Financial Planning">Learn More...</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 margin-60">
							<h2 class="text-center">Latest News</h2>
							<hr class="title bg-color-1">
							<div id="rssFeedReader"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="parallax" style="background-image:url(/images/galleries/style/636/images/parallax-3.jpg)" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="overlay">
					<div class="container margin-30 text-center">
						<div id="testimonials" class="carousel slide" data-interval="6000" data-ride="carousel" data-pause="false">
							<div class="carousel-inner" role="listbox">
								<div class="item active margin-60">
									<p class="lead">
										<span class="fa fa-quote-left"></span>
										{company_name} is one of the leading firms in the area.
										<span class="fa fa-quote-right"></span>
									</p>
								</div>
								<div class="item margin-60">
									<p class="lead">
										<span class="fa fa-quote-left"></span>
										With {company_name}, each client receives close personal and professional attention.
										<span class="fa fa-quote-right"></span>
									</p>
								</div>
								<div class="item margin-60">
									<p class="lead">
										<span class="fa fa-quote-left"></span>
										{company_name} is professional and responsive.
										<span class="fa fa-quote-right"></span>
									</p>
								</div>
								<div class="item margin-60">
									<p class="lead">
										<span class="fa fa-quote-left"></span>
										{company_name} is known for quality service.
										<span class="fa fa-quote-right"></span>
									</p>
								</div>
							</div>
							<ol class="carousel-indicators visible">
								<li data-target="#testimonials" data-slide-to="0" class="active"></li>
								<li data-target="#testimonials" data-slide-to="1"></li>
								<li data-target="#testimonials" data-slide-to="2"></li>
								<li data-target="#testimonials" data-slide-to="3"></li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-white">
				<div class="container text-center">
					<div class="margin-60">
						<h2>Contact Us</h2>
						<hr class="title bg-color-1">
						<p class="lead">We would love to hear from you!</p>
					</div>
				</div>
				<iframe id="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
					src="http://maps.google.com/?q={street_address},+{city},+{state}+{zip}&amp;iwloc=near&amp;output=embed">
				</iframe>
			</section>

			<section>
				<div class="container">
					<div class="row margin-60">
						<div class="col-md-6 col-md-push-6 lead">
							<p>
								We will answer all of your questions, as they impact both your tax and financial situations. We welcome you to contact us anytime.
							</p>
							<p>
								At {company_name}, we've been serving the {firm_type} needs of {city}, {state} and the surrounding areas for years. If you need help managing any aspect of your home or business's finances, we want to hear from you.
							</p>
							<p>
								Please fill out this form and let us know how we can be of service. We will happily offer you a <strong>free consultation</strong> to determine how we can best serve you.
							</p>
							<p>
								Thank you for visiting. We look forward to working together!
							</p>
						</div>
						<div class="col-md-6 col-md-pull-6">
							<form id="styleForm" name="get_in_touch" method="post" action="feedbackmail.php">
								<input name="recipient" value="<FIMAIL>" type="hidden">
								<div class="form-group">
									<label class="hidden" for="contactName">Name</label>
									<input class="form-control input-lg" name="Name" placeholder="Name" title="Name" id="contactName">
								</div>
								<div class="form-group">
									<label class="hidden" for="contactEmail">Email</label>
									<input class="form-control input-lg" name="Email" placeholder="Email" title="Email" id="contactEmail">
								</div>
								<div class="form-group">
									<label class="hidden" for="contactPhone">Phone</label>
									<input class="form-control input-lg" name="Phone" placeholder="Phone" title="Phone" id="contactPhone">
								</div>
								<div class="form-group">
									<label class="hidden" for="contactComments">Comments</label>
									<textarea class="form-control input-lg" name="Comments" placeholder="Comments" title="Comments" id="contactComments"></textarea>
								</div>
								<div class="form-group text-right">
									<label class="hidden" for="contactSubmit">Submit</label>
									<input type="submit" value="Send" class="btn btn-lg btn-primary" title="Send" id="contactSubmit">
								</div>
								<input name="hCheck" type="hidden">
							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-white">
				<div class="container">
					<div class="row margin-60">
						<div class="col-sm-3">
							<img class="img-responsive center-block" src="/images/galleries/style/636/images/seal-quickbooks-min.jpg" alt="Intuit Certified ProAdvisor - Quickbooks">
						</div>
						<div class="col-sm-3">
							<img class="img-responsive center-block" src="/images/galleries/style/636/images/seal-aicpa-min.jpg" alt="Member of AICPA">
						</div>
						<div class="col-sm-3">
							<img class="img-responsive center-block" src="/images/galleries/style/636/images/seal-cpass-min.jpg" alt="Powered by CPA Site Solutions">
						</div>
						<div class="col-sm-3">
							<img class="img-responsive center-block" src="/images/galleries/style/636/images/seal-afn-min.jpg" alt="Accountant Finder Network">
						</div>
					</div>
				</div>
			</section>

			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 margin-60">
							<h3>Quick Links</h3>
							<p>
								<a href="calc-section.php">Financial Calculators</a><br>
								<a href="quick-send.php">Send Us A File</a><br>
								<a href="taxrefunds.php">Track Your Refund</a><br>
								<a href="taxpublications.php">IRS Tax Forms</a><br>
								<a href="statetaxforms.php">State Tax Forms</a><br>
								<a href="taxduedates.php">Tax Due Dates</a>
							</p>
						</div>
						<div class="col-md-3 col-sm-6 margin-60">
							<h3>Portal Login</h3>
							<form action="{PortalLoginURL}" method="post" name="form">
								<div class="form-group">
									<label class="hidden" for="portalName">Name</label>
									<input placeholder="Email" title="Email" name="Username" class="form-control" id="portalEmail">
								</div>
								<div class="form-group">
									<label class="hidden" for="portalPassword">Password</label>
									<input placeholder="Password" title="Password" name="Password" type="password" class="form-control" id="portalPassword">
								</div>
								<div class="form-group clearfix">
									<label class="hidden" for="portalSubmit">Submit</label>
									<input type="submit" class="btn btn-primary pull-right" value="Login" placeholder="Login" title="Login" id="portalSubmit">
								</div>
								<input name="Submit" value="clicked" type="hidden">
							</form>
						</div>
						<div class="visible-sm clearfix"></div>
						<div class="col-md-3 col-sm-6 margin-60">
							<h3>Contact Us</h3>
							<p>
								{company_name}<br>
								{street_address}<br>
								{city}, {state} {zip}<br>
								Phone: {phone}<br>
								Fax: {fax}<br>
								<a href="mailto:{email}">{email}</a>
							</p>
						</div>
						<div class="col-md-3 col-sm-6 margin-60">
							<h3>Newsletter</h3>
							<p>Subscribe to our newsletter to receive news, updates, and valuable tips.</p>
							<form method="post" action="http://www.cpaemailmarketing.com/client/campsub.php">
								<input type="hidden" name="function" value="customer2">
								<input type="hidden" name="un" value="<USERNAME>">
								<input type="hidden" name="custom5" value="<USERNAME>">
								<div class="input-group">
									<label class="hidden" for="newsEmail">Email</label>
									<input name="Email" class="form-control" placeholder="Enter your email address" title="Enter your email address" id="newsEmail">
									<div class="input-group-btn">
										<label class="hidden" for="newsSubmit">Submit</label>
										<button class="btn btn-primary" type="submit" name="submit" title="Submit" id="newsSubmit">
											&nbsp;<div class="fa fa-envelope"></div>&nbsp;
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</footer>

			<section id="subFooter">
				<div class="container">
					<div class="row margin-30">
						<div class="col-sm-6">
							<p class="margin-0">&copy; {company_name} <?php echo date("Y"); ?></p>
						</div>
						<div class="col-sm-6 text-right">
							<p class="margin-0">
								<a href="">Login</a> &nbsp;
								<a href="search.php">Search</a> &nbsp;
								<a href="sitemap.php">Site Map</a> &nbsp;
								<a href="privacy.php">Privacy Policy</a> &nbsp;
								<a href="disclaimer.php">Disclaimer</a>
							</p>
						</div>
					</div>
				</div>
			</section>

			<!-- Scroll to top -->
			<a href="#top" class="scrollToTop hidden fa fa-angle-double-up" title="Back to top"></a>

		</div>

		<!-- Consultation Form Modal -->
		<div class="modal fade" id="modalConsult" tabindex="-1" role="dialog" aria-labelledby="calcLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h2 class="modal-title">Contact Us</h2>
						</div>
						<div class="modal-body">
							<form name="get_in_touch" method="post" action="feedbackmail.php">
								<input name="recipient" value="<FIMAIL>" type="hidden">
								<div class="form-group">
									<label class="hidden" for="modalContactName">Name</label>
									<input class="form-control input-lg" name="Name" placeholder="Name" title="Name" id="modalContactName">
								</div>
								<div class="form-group">
									<label class="hidden" for="modalContactEmail">Email</label>
									<input class="form-control input-lg" name="Email" placeholder="Email" title="Email" id="modalContactEmail">
								</div>
								<div class="form-group">
									<label class="hidden" for="modalContactPhone">Phone</label>
									<input class="form-control input-lg" name="Phone" placeholder="Phone" title="Phone" id="modalContactPhone">
								</div>
								<div class="form-group">
									<label class="hidden" for="modalContactComments">Comments</label>
									<textarea class="form-control input-lg" name="Comments" placeholder="Comments" title="Comments" id="modalContactComments"></textarea>
								</div>
								<div class="form-group text-right">
									<label class="hidden" for="modalContactSubmit">Send</label>
									<input type="submit" value="Send" class="btn btn-lg btn-primary" title="Send" id="modalContactSubmit">
								</div>
								<input name="hCheck" type="hidden">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Subscribe To Newsletter Modal -->
		<div class="modal fade" id="modalSubscribe" tabindex="-1" role="dialog" aria-labelledby="calcLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h2 class="modal-title">Newsletter</h2>
						</div>
						<div class="modal-body">
							<p>Subscribe to our newsletter to receive news, updates, and valuable tips.</p>
							<form method="post" action="http://www.cpaemailmarketing.com/client/campsub.php">
								<input type="hidden" name="function" value="customer2">
								<input type="hidden" name="un" value="<USERNAME>">
								<input type="hidden" name="custom5" value="<USERNAME>">
								<div class="input-group input-group-lg">
									<label class="hidden" for="modalNewsEmail">Email</label>
									<input name="Email" class="form-control" placeholder="Enter your email address" title="Enter your email address" id="modalNewsEmail">
									<div class="input-group-btn">
										<label class="hidden" for="modalNewsSubmit">Submit</label>
										<button class="btn btn-primary" type="submit" name="submit" title="Submit" id="modalNewsSubmit">
											&nbsp;<div class="fa fa-envelope"></div>&nbsp;
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Login Modal -->
		<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="calcLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h2 class="modal-title">Portal Login</h2>
						</div>
						<div class="modal-body">
							<form action="{PortalLoginURL}" method="post" name="form">
								<div class="form-group">
									<label class="hidden" for="modalPortalEmail">Email</label>
									<input placeholder="Email" title="Email" name="Username" class="form-control input-lg" id="modalPortalEmail">
								</div>
								<div class="form-group">
									<label class="hidden" for="modalPortalPassword">Password</label>
									<input placeholder="Password" title="Password" name="Password" type="password" class="form-control input-lg" id="modalPortalPassword">
								</div>
								<div class="form-group text-right">
									<label class="hidden" for="modalPortalLogin">Login</label>
									<input type="submit" class="btn btn-lg btn-primary" value="Login" placeholder="Login" title="Login" id="modalPortalLogin">
								</div>
								<input name="Submit" value="clicked" type="hidden">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap JavaScript -->
	<script src="/images/galleries/style/bootstrap-3.3.6/js/bootstrap.min.js"></script>

	<!-- SmartMenus -->
	<script type="text/javascript" src="/images/galleries/style/js/smartmenus-1.1.0/jquery.smartmenus.min.js"></script>

	<!-- SmartMenus Keyboard Addon -->
	<script type="text/javascript" src="/images/galleries/style/js/smartmenus-1.1.0/addons/keyboard/jquery.smartmenus.keyboard.min.js"></script>

	<!-- Placeholder Compatibility -->
	<script src="/images/galleries/style/jquery/placeholder/jquery.placeholder.min.js"></script>

	<!-- Same Height -->
	<script src="/images/galleries/style/jquery/same-height/same-height.js"></script>

	<!-- RSS Feed -->
	<script src="/images/galleries/style/jquery/rss-feed/rss-feed.js"></script>

	<!-- Tax Countdown Script -->
	<script src="/images/galleries/style/jquery/jquery.countdown.js"></script>

	<script>
		$(function() {
			// Format SmartMenu
			$('ul.nav.navbar-nav').attr({"id":"SmartMenu","class":""});
			$('#SmartMenu ul').attr('class','');
			$('#SmartMenu span.caret').remove();
			// Toggle SmartMenu
			$('#Toggle').click(function() {
			  $(this).toggleClass('fa-close fa-navicon');
			  $('#Nav').slideToggle();
			});
			// Toggle SmartMenu on Resize
			$( window ).resize(function() {
				var screen = $(window)
				if ($('#Toggle').is(':hidden') && $('#Toggle').hasClass('fa-close')) {
					$('#Nav').hide();
					$('#Toggle').toggleClass('fa-close fa-navicon');
				}
			});
			// Initialize SmartMenu
			$('#SmartMenu').smartmenus({
				subIndicatorsText:'',
				collapsibleBehavior: 'accordion-link',
				hideOnClick: false,
				markCurrentItem: true
			});

			// Accessibility
			$('#skipNav').click(function(event){
				var skipTo="#"+this.href.split('#')[1];
				$(skipTo).attr('tabindex', -1).on('blur focusout', function () {
					$(this).removeAttr('tabindex');
				}).focus();
			});

			// Tax Countdown Script
            var a = new Date,
                b = a.getMonth(),
                c = a.getDate(),
                d = 4,
                e = 15;
            newYear = b >= d - 1 ? b == d - 1 && c < e ? new Date(a.getFullYear(), d - 1, e) : new Date(a.getFullYear() + 1, d - 1, e) : new Date(a.getFullYear(), d - 1, e), $("#defaultCountdown").countdown({
                until: newYear
            });
        });

		// RSS Feed
		$('#rssFeedReader').rssfeed('{domain}rssfeed.php', {
			limit: 3, // Number of posts displayed
			layoutTemplate: '{entries}',
			entryTemplate:  '<div class="margin-30"><h4><a href="{url}">{title}</a></h4><p>{shortBodyPlain}...</div>'
		});

		// Scroll To Top
		$('.scrollToTop').click(function() {
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			return false;
		});

		// Fixed Header and Scroll To Top Visibility
		$(document).scroll( function() {
			var scrollTop = $(document).scrollTop();
			if (0 < scrollTop) {
				$('header').addClass('fix');
				$('.scrollToTop').removeClass('hidden');
			}
			else {
				$('header').removeClass('fix');
				$('.scrollToTop').addClass('hidden');
			}
		});

		// Placeholder Compatibility
		$('input, textarea').placeholder();

		// Position Carousel Indicators
		var headerHeight = $('header').height();
		$('#homeSlide .carousel-indicators').css('bottom', headerHeight);

		// Carousel Animations
		$('#homeSlide').on('slide.bs.carousel', function() {
			$('.item .caption').addClass('animated zoomOut');
			$('.item .outline').removeClass('animated slideInLeft');
			$('.item .btn').removeClass('animated slideInRight');
		});
		$('#homeSlide').on('slid.bs.carousel', function() {
			$('.item .caption').removeClass('animated zoomOut');
			$('.item .outline').addClass('animated slideInLeft');
			$('.item .btn').addClass('animated slideInRight');
		});
	</script>

	<!-- END Scripts -->

</html>

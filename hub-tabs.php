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

		<!-- Font-Awesome CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,400,400i,600,600i,700,700i" rel="stylesheet">

		<!-- Start Stylesheet -->

	</head>

	<body>
		<div id="styleContainer" class="internal">
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

			<section id="styleTitle" class="parallax" style="background-image:url(/images/galleries/style/636/images/parallax-1.jpg)" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="overlay">
					<div class="container">
						<h2 class="margin-0">{nav_title}</h2>
					</div>
				</div>
			</section>
			<section id="breadcrumbs" class="hidden-xs bg-white">
				<div class="container">
					<div class="fa fa-home color-1"></div>
					<a href="index.php" title="{company_name}">Home</a>
						&nbsp;/&nbsp;
				</div>
			</section>
			<section class="bg-white">
				<div class="container">
					<div class="row">
						<div id="content" class="col-md-8 margin-top-30 margin-bottom-60">
							<!-- Start Page Tabs-->
						</div>
						<div id="sidebar" class="col-md-4 margin-60 hidden-xs hidden-sm">
							<div id="subNav">
								<h3 class="margin-top-0">In This Section:</h3>
							</div>
						</div>
						<div id="sticky" class="col-md-4 margin-bottom-60">
							<ul class="nav nav-tabs margin-bottom-30">
								<li role="presentation" class="active">
									<a href="#tabContact" data-toggle="tab">Contact Us</a>
								</li>
								<li role="presentation">
									<a href="#tabRss" data-toggle="tab">Latest News</a>
								</li>
								<li role="presentation">
									<a href="#tabFaqs" data-toggle="tab">FAQs</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="tabContact">
									<form name="get_in_touch" method="post" action="feedbackmail.php">
										<input name="recipient" value="<FIMAIL>" type="hidden">
										<div class="form-group">
											<label class="hidden" for="tabName">Name</label>
											<input class="form-control input-lg" name="Name" placeholder="Name" title="Name" id="tabName">
										</div>
										<div class="form-group">
											<label class="hidden" for="tabEmail">Email</label>
											<input class="form-control input-lg" name="Email" placeholder="Email" title="Email" id="tabEmail">
										</div>
										<div class="form-group">
											<label class="hidden" for="tabPhone">Phone</label>
											<input class="form-control input-lg" name="Phone" placeholder="Phone" title="Phone" id="tabPhone">
										</div>
										<div class="form-group">
											<label class="hidden" for="tabComments">Comments</label>
											<textarea class="form-control input-lg" name="Comments" placeholder="Comments" title="Comments" id="tabComments"></textarea>
										</div>
										<div class="form-group text-right">
											<label class="hidden" for="tabSend">Submit</label>
											<input type="submit" value="Send" class="btn btn-lg btn-primary" title="Send" id="tabSubmit">
										</div>
										<input name="hCheck" type="hidden">
									</form>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tabRss">
									<div id="rssFeedReader"></div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tabFaqs">
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
							</div>
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
								Phone: (800)896-4500<br>
								Fax: (866)714-4457<br>
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
	<script src="/images/galleries/style/bootstrap-3.3.6/js/bootstrap.min.js" ></script>

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

	<!-- Unwrap content -->
	<script src="/images/galleries/style/jquery/unwrap-until.js"></script>

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

			// In This Section
			$('li.active').children().clone().appendTo('#subNav');
			$('#subNav').find('ul, li, a').removeAttr('id').removeAttr('class');
			$('#subNav ul ul, #subNav .caret, #subNav>a').remove();
			if ( $('li.active').children().length <= 1 ) {
				$('#subNav').remove();
				$('#styleContent').removeAttr('class').addClass('col-lg-12');
			}

			// Breadcrumbs
			var pathname = window.location.pathname;
            var path = pathname.substring(pathname.lastIndexOf("/") + 1, pathname.length);
            console.log(path)
            if (path) {
                $('#SmartMenu li a[href$="' + path + '"]:first').attr('class', 'current');
            }
            var crumbs = $(".current").parents("ul").prev().add(".current")
            .map(function() {
                link = $(this).attr('href');
                link_text = $(this).text().trim();
                bc = "<a href="+link+">"+link_text+"</a>";
                return bc;
            }).get().join(" &nbsp;/&nbsp; ");
        	$('#breadcrumbs .container').append(crumbs);
			$('#breadcrumbs .container a:last').contents().unwrap();
		});

		// Scroll To Top
		$('.scrollToTop').click(function() {
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			return false;
		});

		// Fixed Header and Scroll To Top Visibility
		$(document).scroll( function() {
			var scrollTop = $(document).scrollTop();
			var headerHeight = $('header').innerHeight();
			if (40 < scrollTop) {
				$('header').addClass('fix');
				$('#topbar').css('padding-bottom', headerHeight);
				$('.scrollToTop').removeClass('hidden');
			}
			else {
				$('header').removeClass('fix');
				$('#topbar').css('padding-bottom', '0');
				$('.scrollToTop').addClass('hidden');
			}
		});

		// Sticky Sidebar Header Padding
		var headerHeight = $('.internal header').height();
		$('#sticky').css('top', headerHeight + 30);

		// Content Clean-up
		$('#Form input, #Form textarea, #Form select').not(':radio, :checkbox, :submit').addClass('form-control');
		$('#Form input:submit').addClass('btn btn-primary pull-right');
		$('#DueDates font[color="#FFFFFF"]').replaceWith(
			function(){
				var tag = $(this);
				return $('<h2/>').html(tag.html()).append('<hr />');
			}
		)
		$('#TaxRates table, #Publications table').not('table table').addClass('table table-striped');

		// RSS Feed
		$('#rssFeedReader').rssfeed('{domain}rssfeed.php', {
			limit: 3, // Number of posts displayed
			layoutTemplate: '{entries}',
			entryTemplate:  '<div class="margin-30"><h4><a href="{url}">{title}</a></h4><p>{shortBodyPlain}...</div>'
		});

		// Unwrap Content
		$('#Header').unwrapUntil('#content');
		$('#Guides').unwrapUntil('#content');

		// Placeholder Compatibility
		$('input, textarea').placeholder();

	</script>

	<!-- END Scripts -->

</html>

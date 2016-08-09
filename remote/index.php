<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="put a description here">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Activate</title>
	<!-- Disable tap highlight on IE -->
	<meta name="msapplication-tap-highlight" content="no">
	<?php include('partials/faves.html'); ?>
	<link rel="canonical" href="http://www.activateconf.com/">
	<!-- fb OG markup -->
	<meta property="og:url" content="http://www.activateconf.com/" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Home" />
	<meta property="og:description" content="description goes here" />
	<meta property="og:image" content="http://www.activateconf.com/image.png" />

	<!-- twitter card markup -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@activ8conf">
	<meta name="twitter:creator" content="@activ8conf">
	<meta name="twitter:title" content="Home">
	<meta name="twitter:description" content="description goes here">
	<meta name="twitter:image" content="http://www.activateconf.com/">
	<meta name="author" content="Lynsey Gwin Jordan, Quinton Jason Jr, and Isral C. Duke" />
	<link type="text/plain" rel="author" href="/humans.txt" />

	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/3e1612c7-37ae-49f9-b020-c52a55c407de.css"/>
	<link rel="stylesheet" href="css/styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>		
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineLite.min.js"></script>
</head>
<body>
	<article id="rocket" class="article rocket">
		<!-- <img class="logo logo-rocket" src="assets/img/rocket.svg" alt="activate rocket is ready to launch you"> -->

		<div class="animate">		
			<object id="rocket-svg" type="image/svg+xml" data="assets/img/rocket.svg" class="logo logo-rocket animate">		
				<img src="assets/img/rocket.png" alt="activate rocket is ready to launch you"/>		
			</object>		
		</div>
	</article>

	<?php include('partials/navbar.html'); ?>

	<!-- about -->
	<article id="about-activate" class="wrap article about">
		<!-- copy this for partial -->
		<div class="col col-62">
			<section class="section bg-white activate-info">
				<h2 class="text-red">about activate</h2>
				<p class="lead-in">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. </p>
				<p>Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
			</section>
			<section class="section bg-light-powder activate-subscribe">
				<h3 class="text-blue">stay updated</h3>
				<div class="form-wrap">
					<form action="">
						<div class="form-inline">
							<input class="form-control" type="email">
							<button class="btn btn-text-only" type="submit">subscribe</button>
						</div>
					</form>
				</div>
			</section>
		</div>
		<div class="col col-38">
			<section class="section bg-red activate-date">
				<div>
					<h3 class="text-white">date</h3>
					<p class="text-white">day, month date, year<br /> time &ndash; time PM</p>
					<button class="btn btn-has-icon">add calendar event</button>
				</div>
				<div>
					<h3 class="text-white">venue</h3>
					<p class="text-white">venue name <br /> address1 <br />address 2<br /> city, state, zip</p>
					<button class="btn btn-has-icon">more about venue</button>
				</div>
				<div>
					<a href="fb">
						<?php include('partials/fb.html'); ?>
					</a>
					<a href="tw">
						<?php include('partials/tw.html'); ?>
					</a>
					<a href="ig">
						<?php include('partials/ig.html'); ?>
					</a>
				</div>
			</section>
		</div>
		<!-- end partial -->
	</article>

	<!-- speakers -->
	<article id="speakers" class="wrap article speakers">
		<!-- copy this for partial -->
		<div class="col col-50">
			<section class="section">
				<h2>speakers</h2>
			</section>
			<section class="speaker-bio-wrap blue">
				<div class="speaker-photo">
					<img class="speaker-panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="speaker name speaker subject" />
				</div>
				<div class="section speaker-bio">
					<h3 class="speaker-name">first last <span class="speaker-name-aux">llorem ipsum</span></h3>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
					<h4>presentation title</h4>
					<p class="speaker-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
				</div>
			</section>
			<section class="speaker-bio-wrap turquoise">
				<div class="speaker-photo">
					<img class="speaker-panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="speaker name speaker subject" />
				</div>
				<div class="section speaker-bio">
					<h3 class="speaker-name">first last <span class="speaker-name-aux">llorem ipsum</span></h3>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
					<h4>presentation title</h4>
					<p class="speaker-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
				</div>
			</section>
		</div>
		<div class="col col-50">
			<section class="speaker-bio-wrap red">
				<div class="speaker-photo">
					<img class="speaker-panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="speaker name speaker subject" />
				</div>
				<div class="section speaker-bio">
					<h3 class="speaker-name">first last <span class="speaker-name-aux">llorem ipsum</span></h3>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
					<h4>presentation title</h4>
					<p class="speaker-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
				</div>
			</section>
			<section class="speaker-bio-wrap powder">
				<div class="speaker-photo">
					<img class="speaker-panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="speaker name speaker subject" />
				</div>
				<div class="section speaker-bio">
					<h3 class="speaker-name">first last <span class="speaker-name-aux">llorem ipsum</span></h3>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
					<h4>presentation title</h4>
					<p class="speaker-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
				</div>
			</section>
		</div>
		
		<!-- end partial -->
	</article>

	<!-- panel -->
	<article id="panel" class="wrap article panel">
		<!-- copy this for partial -->
		<div class="col col-50">
			<section class="section">
				<h2>panel</h2>
			</section>
			<section class="section">
				<h3>ask the experts</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
				<div class="speaker-panel">
					<h4>first last</h4>
					<p>expertise area</p>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
				</div>
				<div class="speaker-panel">
					<h4>first last</h4>
					<p>expertise area</p>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
				</div>
				<div class="speaker-panel">
					<h4>first last</h4>
					<p>expertise area</p>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
				</div>
				<div class="speaker-panel">
					<h4>first last</h4>
					<p>expertise area</p>
					<div class="speaker-socials">
						<a href="fb">
							<?php include('partials/fb.html'); ?>
						</a>
						<a href="tw">
							<?php include('partials/tw.html'); ?>
						</a>
						<a href="ig">
							<?php include('partials/ig.html'); ?>
						</a>
					</div>
				</div>
			</section>
		</div>
		<div class="col col-50">
			<section class="speaker-panel-photos">
				<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
				<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
				<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
				<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
			</section>
		</div>
		<!-- end partial -->
	</article>

	<div class="bg-color bg-powder">
		<article id="venue" class="wrap article venue">
			<section class="section">
				<h2>venue</h2>
			</section>
			<section class="section">
				<div class='embed-container'>
					<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439.457866162031!2d-91.18388954926624!3d30.45146688164646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8626a0dd10e52027%3A0x7eb56487c2972f32!2sCreative+Bloc!5e0!3m2!1sen!2sus!4v1467584173057' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
				</div>
			</section>
		</article>
	</div>
	
	<!-- sponsors -->
	<div class="bg-color bg-grey">
		<article id="sponsors" class="wrap article sponsors">
			<section class="section">
				<h2>sponsors</h2>
			</section>
			<div class="col">
				<section class="sponsor-level sponsor-level-name bg-powder">
					<img class="inject-me sponsor-logo" src="assets/img/logos/android-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-orange">
					<img class="inject-me sponsor-logo" src="assets/img/logos/apple-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-yellow">
					<img class="inject-me sponsor-logo" src="assets/img/logos/github-logo.svg" alt="Sponsor Name Logo">
				</section>
			</div>
			<div class="col">
				<section class="sponsor-level sponsor-level-name bg-red">
					<img class="inject-me sponsor-logo" src="assets/img/logos/google-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-powder">
					<img class="inject-me sponsor-logo" src="assets/img/logos/slack-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-blue">
					<img class="inject-me sponsor-logo" src="assets/img/logos/twitter-logo.svg" alt="Sponsor Name Logo">
				</section>
			</div>
			<div class="col">
				<section class="sponsor-level sponsor-level-name bg-powder">
					<img class="inject-me sponsor-logo" src="assets/img/logos/android-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-turquoise">
					<img class="inject-me sponsor-logo" src="assets/img/logos/apple-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-yellow">
					<img class="inject-me sponsor-logo" src="assets/img/logos/github-logo.svg" alt="Sponsor Name Logo">
				</section>
			</div>
			<div class="col">
				<section class="sponsor-level sponsor-level-name bg-orange">
					<img class="inject-me sponsor-logo" src="assets/img/logos/google-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-powder">
					<img class="inject-me sponsor-logo" src="assets/img/logos/slack-logo.svg" alt="Sponsor Name Logo">
				</section>
				<section class="sponsor-level sponsor-level-name bg-red">
					<img class="inject-me sponsor-logo" src="assets/img/logos/twitter-logo.svg" alt="Sponsor Name Logo">
				</section>
			</div>
		</article>
	</div>

	<div class="bg-color bg-indigo">
		<article id="organizers" class="wrap article organizers">
			<div class="col col-50">
				<section class="section">
					<h2>organizers</h2>
				</section>
				<section class="section">
					<h3>activating your reach</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis magna, fringilla eget congue a, vulputate vel felis. Fusce hendrerit urna in lectus tristique nec commodo est luctus. Nullam malesuada lobortis diam ut placerat. Vestibulum cursus ultrices eros sed euismod. Suspendisse potenti. Donec vehicula venenatis rhoncus. Etiam pretium pretium aliquet. Aliquam erat volutpat.</p>
					<div class="speaker-panel">
						<h4>lynsey jordan gwin</h4>
						<p>envoc</p>
						<div class="speaker-socials">
							<a href="fb">
								<?php include('partials/fb.html'); ?>
							</a>
							<a href="tw">
								<?php include('partials/tw.html'); ?>
							</a>
							<a href="ig">
								<?php include('partials/ig.html'); ?>
							</a>
						</div>
					</div>
					<div class="speaker-panel">
						<h4>quinton jason jr</h4>
						<p>x design</p>
						<div class="speaker-socials">
							<a href="fb">
								<?php include('partials/fb.html'); ?>
							</a>
							<a href="tw">
								<?php include('partials/tw.html'); ?>
							</a>
							<a href="ig">
								<?php include('partials/ig.html'); ?>
							</a>
						</div>
					</div>
					<div class="speaker-panel">
						<h4>isral duke</h4>
						<p>stun design</p>
						<div class="speaker-socials">
							<a href="//www.twitter.com/isralduke" target="_blank">
								<?php include('partials/tw.html'); ?>
							</a>
							<a href="//www.instagram.com/isralduke" target="_blank">
								<?php include('partials/ig.html'); ?>
							</a>
						</div>
					</div
				</section>
			</div>
			<div class="col col-50">
				<section class="speaker-panel-photos">
					<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
					<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
					<img class="panel-photo" src="assets/img/headshots/isral-c-duke.jpg" alt="">
				</section>
			</div>
		</article>
	</div>
	
	<script src="js/vendor/min/svg-inject.min.js"></script>
	<script src="js/vendor/min/smooth-scroll.min.js"></script>
	<script src="js/activations.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXX-X', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
<?php
// Query params are: utm_term={keyword}&gclid={gclid}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://hindupujaonline.com/', 'PPMfWrDnqDJdmK9x');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nejlepší sportovní události roku 2023</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Nejlepší sportovní události roku 2023</h1>
				<p>Zaregistrujte se, abyste byli informováni o nadcházejících sportovních událostech<br />
				Oznámení. Komentáře espertů </p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled.</li><li>Credits: </a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>
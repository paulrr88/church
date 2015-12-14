<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Ferring Baptist Church</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="This is the official website for Ferring Baptist Church." />
		<meta name="keywords" content="ferring, baptist, baptists, church, churches, worthing, fellowship, worship, worships, worshipping, jesus, christ, god, bible, good, news, gospel, christmas, holiday, club, friday, fridays, easter, celebrate, celebrations, harvest, supper, uk, united, kingdom, england, english, community, christian" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="alternate stylesheet" type="text/css" href="zoom.css" title="zoom layout" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<?php
					putenv("TZ=Europe/London");
					echo "<p>".date('l')."<br />";
					echo date('dS M Y')."<br />";
					// echo date('g:i A')."<br /><br />"; - doesn't adjust for BST so had to disable
					echo "<br /> <br />";
						
					// Should display the date that index.php was last updated:
						
					$filename = 'index.php';
						
					if (file_exists($filename)) {
						echo "Last updated:<br />";
						echo date ("dS M Y", filemtime($filename)) . '</p>';
					}
				?>
			</div>
			<div id="navigation">
				<ul class="nav">
					<li><a href="." accesskey="h" tabindex="2"><span class="underline">H</span>ome</a> | </li>
					<li><strong><a href="visitors_welcome.php" accesskey="v" tabindex="1"><span class="underline">V</span>isitors</a></strong> | </li>
					<li><a href="diary.php" accesskey="e" tabindex="3">This W<span class="underline">e</span>ek</a> | </li>
					<li><a href="upcoming.php" accesskey="s" tabindex="4">Coming Week<span class="underline">s</span></a> | </li>
					<li><a href="inquiries.php" accesskey="i" tabindex="5"><span class="underline">I</span>nquiries</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="visitors_nav">
					<div class="inner">
						<ul>
							<li><a href="visitors_welcome.php" accesskey="w" tabindex="6"><span class="underline">W</span>elcome</a> | </li>
							<li><a href="visitors_disabled.php" accesskey="d" tabindex="7"><span class="underline">D</span>isabled Facilities</a> | </li>
							<li><a href="visitors_youth.php" accesskey="c" tabindex="9"><span class="underline">C</span>hildren &amp; Youth</a> | </li>
							<li><a href="holidayclub.php">Holid<span class="underline">a</span>y Clubs</a> | </li>
							<li><a href="visitors_women.php" accesskey="p" tabindex="10">Women's Fellowshi<span class="underline">p</span></a></li>
						</ul><br />
						<ul>
							<li><a href="visitors_community.php" accesskey="m" tabindex="11">Co<span class="underline">m</span>munity Contact and Outreach</a> | </li>
							<li><a href="visitors_events.php" accesskey="o" tabindex="12"><span class="underline">O</span>ther Regular Events</a> | </li>
							<li><a href="visitors_location.php" accesskey="l" tabindex="8"><span class="underline">L</span>ocation</a></li>
						</ul>
					</div>
				</div>
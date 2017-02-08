<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Assignment 1: System Setup</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="css/assignment1.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>
	<!-- navigation
		 1) assignment requirement: Page includes your name
	-->
	<div id="nav">
		<div class="student">BRYON JUSTICE</div>
	</div>

	<div class="banner" id="belgium">
		<h1>Brussels, Belgium (1979-1984)</h1>
	</div>

	<!-- intro
	     2) assignment requirement: Page includes your photo
	     3) assignment requirement: Page includes your intro
	-->
	<div class="intro">
		<h3>About Me</h3>
		<p><img src="images/bryon.jpg" alt="Bryon Justice, 2017">
    Bryon Justice.  In no particular order.  Husband, father, IT Director, hopeful savant, backyard stargazer,
    meditation practitioner, musicophile (a.k.a. Apple Music subscriber), aspiring creative and “dad bod” devotee.</p>
    <p>Professionally, I lead a technology organization responsible for testing a suite of human capital management
      business solutions servicing large scale corporations with their payroll services, talent management, benefits
      administration, time & attendance, health care reform and human resource management needs.  I sleep better when
      software works.  I feel better when I experience the opportunity to support, motivate and encourage hardworking
      people towards their own life goals and great ideas.</p>
    <p>I hold a Bachelor’s degree from LSU.  Geaux Tigers (pronounced “Go Tigers”)!   I am currently pursuing my
      ALM in the field of Information Management Systems from Harvard University.</p>
    <p>Outside of my work life and studies I enjoy time with my wife and teenaged children.  I have a broad range of interests
      and experiences.  I have lived in both North America and Europe and traveled throughout the Americas, Europe,
      Asia and Africa.  Among my many tales I can claim to have danced with the whirling dervishes in the Sudan,
      travelled by train behind the iron curtain in Cold War Berlin, led a band of camels across the Sahara,
      declined the U.S. ambassador’s invitation for tea with the Archbishop of Canterbury, hosted a Sunday morning
      jazz radio show and interviewed members of various rock bands for music publications.</p>
	</div>

	<div class="banner" id="louisiana">
		<h1>Louisiana (1976-1979, 1985-1993)</h1>
	</div>

	<!-- random quote
		 4) assignment requirement: A random quote is shown each time the page is loaded, pulling from a selection of at least 3 different quotes
		 5) assignment requirement: The random quote feature is powered by PHP
		 6) assignment requirement: Site uses the correct url format of http://a1.yourdomain.com
	-->
	<div class="quote">
		<h3>A random bit of verse...</h3>
		<p class="verse">
        <?php include 'quote.php';?>
		</p>
	</div>

	<!-- footer -->
	<footer>
		<a href="http://dwa15.com/submit/?aid=1">Bryon Justice | CSCI E15 (Spring '17)<br />Assignment 1 (Feb 9, 2017)</a>
	</footer>
  </body>
</html>

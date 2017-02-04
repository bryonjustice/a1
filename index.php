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
		<p><img src="images/bryon.jpg" alt="Bryon Justice, 2017">Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus,
		blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis.
		Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque
		non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque
		risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem
		mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas,
		porta porttitor placerat leo.</p>
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
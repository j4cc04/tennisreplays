
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/favicon.ico"> 
	<link rel="stylesheet" href="css/vendor/fluidbox.min.css">
	<link rel="stylesheet" href="css/main.css">

	<title>Tennis Replays</title>

</head>
<body>


	<header>

		<div id="logo-container">
			<div id="logo"><a href="/">Tennis Replays</a></div>
		</div>
		<nav>
			<ul>
				<li><a href="mailto:tennisreplays2020@gmail.com" class="bordered">Contact</a></li>
			</ul>
		</nav>

	</header>

	<div id="content">

		<section class="intro">
			<h1>Hello, <span class="nl"></span>we are here to help you.</h1>
			<p>
				We provide a way for you to be able to get the latest Tennis match Replays.
			</p>
		</section>

		<section class="row">
			<div class="col-full">
				<h2>List of available matches:</h2>
				<?php
					$str = file_get_contents('list.json');
					$json = json_decode($str, true);
					foreach($json as $match){
					echo '<div class="d-flex flex-row"><div class="col-5"><span>';
					echo $match["p1"] . " - " . $match["p2"];
					echo '</span></div><div class="col-3"><span>';
					echo date("d/m/Y g:i a", strtotime($match["match_date"]));
					echo '</span></div><div class="col-3"><span>';
					echo $match["match_league"];
					echo '</span></div><div class="col-1"><span>';
						echo '->';
					echo '</span></div></div>';
					}
				?> 
			</div>
		</section>
<!--
		<section class="row">
			<div class="photo-grid">
				<a href="img/example-photo-b.jpg" rel="lightbox" class="col-2"><img src="img/example-photo-b.jpg" alt="Example photo"></a>
				<a href="img/example-photo-c.jpg" rel="lightbox" class="col-2"><img src="img/example-photo-c.jpg" alt="Example photo"></a>
				<a href="img/example-photo-a.jpg" rel="lightbox" class="col-1"><img src="img/example-photo-a.jpg" alt="Example photo"></a>
			</div>
		</section>
-->

		<section class="row">
			<div class="col-full">
				<h2>Contact</h2>
				<p>
					Want any of the previous match? Just send us an <a href="mailto:tennisreplays2020@gmail.com">email</a> (tennisreplays2020@gmail.com).
				</p>
			</div>
		</section>
 
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	if (!window.jQuery) 
	{
	    document.write('<script src="js/vendor/jquery.1.11.min.js"><\/script>');
	}
	</script>

	<script src="js/vendor/jquery.fluidbox.min.js"></script>
	<script src="js/main.js"></script>

<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-173040292-1', 'auto');
	  ga('send', 'pageview');

</script>

</body>
</html>





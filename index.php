<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Shrihari Sankaran" />
	
	<!-- Site Description and Keywords-->
	<meta name="keywords" content="amazing place, travel, landscapes, scenery" />
	<meta name="description" content="A small curated collection of photos from r/EarthPorn" />
	<meta property="og:image" content="http://amazingplac.es/amazingplaces.jpg" />

	<link rel="stylesheet" href="style.css">
	<?php
		$num = rand(1, 40);
	?>
	<style type="text/css">
	html { 
		background: url(images/<?php echo $num; ?>.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	</style>
	<script>
	function fadeIn(el) {
		el.style.opacity = 0;
		el.style.display = "block";

		var last = +new Date();
		var tick = function() {
			el.style.opacity = +el.style.opacity + (new Date() - last) / 400;
			last = +new Date();

			if (+el.style.opacity < 1) {
				(window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
			}
		};

		tick();
	}
	function show() {
		var el = document.getElementById('info-text');
		fadeIn(el);
		event.preventDefault();
	}
	function hide() {
		var el = document.getElementById('info-text');
		el.style.display = 'none';
		return false;
	}
	</script>

	<title>Amazing Places</title>
</head>
<body>
	<?php
		$myFile = "info.tsv";
		$lines = file($myFile);
		$info = explode("\t", $lines[$num-1]);
	?>
	<a href="#"  onClick="window.location.reload(true); event.preventDefault(); " id="shuffle"><img src="shuffle.svg" width="16px" height="16px" /></a>
	<a href="#" onClick="show(); event.preventDefault();" id="source">i</a>

	<div id="info-text" onClick="hide();">
		<h1><?php echo $info[2]; ?></h1>
		<h2><?php echo $info[3]; ?></h2>
		<div>
			<a href="<?php echo $info[1]; ?>" target="_blank">wiki</a>&nbsp;&nbsp;
			<a href="<?php echo $info[0]; ?>" target="_blank">source</a>
		</div>

		<div id="footer">
		a little thing by <a href="http://shrihari.me/" target="_blank">Shrihari</a>. sourced from <a href="http://www.reddit.com/r/EarthPorn/" target="_blank">r/EarthPorn</a>
		</div>
	</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48220485-1', 'amazingplac.es');
  ga('send', 'pageview');

</script>
</body>
</html>
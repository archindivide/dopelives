﻿<?
$hls = isset($_GET['hls']);
?><!DOCTYPE html>
<html>

	<head>
		<title>Dopefish Lives</title>
		<meta charset="utf-8" /> 
		<link rel="icon" href="/images/favicon.png" sizes="16x16" type="image/png" />

		<link rel="stylesheet" type="text/css" href="style/font.css" />
		<link rel="stylesheet" type="text/css" href="style/watch.css" />

		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<? if ($hls) { ?>
			<script src="http://content.jwplatform.com/libraries/i2wbg4Bq.js"></script>
		<? } else { ?>
			<script src="script/jwplayer-7.12.13.js"></script>
		<? } ?>
		<script>
			jwplayer.key="b3eA3XrzNeYTKIscnX3RJQKfYGPDtXzXSoYDVw==";
			var hls = <?= $hls ? 'true' : 'false' ?>;
		</script>
		
		<script src="script/functions.js"></script>
		<script src="script/watch.js"></script>
		<script>
			$(function() {
				initPlayer();
			});
		</script>
		
	</head>

	<body>
		<div id="flash"></div>
	</body>
</html>
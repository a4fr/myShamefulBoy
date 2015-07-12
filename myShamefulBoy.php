<?php

if ( isset ($_POST['url']) && $_POST['url'] != ''){
	$url = $_POST['url'];
	$result = file_get_contents($url);
	echo $result;
}
else {?>
	<!doctype html>
	<html>
		<head>
			<title>Enter URL</title>
			<meta charset="UTF-8" />
		</head>
		<body>
			<form method="post">
				<br/>
				<br/>
				<p style="text-align: center;">
				Enter URL: <input name="url" type="text" size="50" placeholder="http://">
				<input type="submit" value="Submit">
				</p>
			</form>
		</body>
	</html>
<?php } ?>





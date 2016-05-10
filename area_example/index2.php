<?php
function area($width, $height){
	return $width * $height;
}
$area = area(4, 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Calculate Area</title>
</head>
<body>
	<p> Area: <? echo $area; ?>
	</p>
</body>
</html>
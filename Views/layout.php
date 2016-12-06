<!DOCTYPE html>
<html>

<head>
	<title>M2L<?php if ($title) {echo " - ".$title;};?></title>
	<meta charset="UTF-8">
	<link href=<?php ROOTDIR ?>"/m2l/Web/css/reset.css" rel="stylesheet" type="text/css">
	<link href=<?php ROOTDIR ?>"/m2l/Web/css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

    <?= $content ?>

<script src=<?php ROOTDIR ?>"/m2l/Web/script/app.js"></script>
</body>

</html>
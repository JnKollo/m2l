<!DOCTYPE html>
<html>

<head>
    <title>M2L<?php if ($title) {echo " - ".$title;};?></title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Bootstrap 3.3.6 -->
    <link href=<?php ROOTDIR ?>"bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"><!-- Ionicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"><!-- Theme style -->
    <link href=<?php ROOTDIR ?>"dist/css/AdminLTE.css" rel="stylesheet">
    <link href=<?php ROOTDIR ?>"dist/css/skins/skin-blue.min.css" rel="stylesheet">
    <link href=<?php ROOTDIR ?>"custom/css/main.css" rel="stylesheet">
</head>

<body <?= $this->classBody;?> >

    <?= $content ?>


    <script src=<?php ROOTDIR ?>"plugins/jQuery/jquery-2.2.3.min.js"></script> <!-- Bootstrap 3.3.6 -->
    <script src=<?php ROOTDIR ?>"bootstrap/js/bootstrap.min.js"></script> <!-- AdminLTE App -->
    <script src=<?php ROOTDIR ?>"dist/js/app.min.js"></script>

</body>

</html>
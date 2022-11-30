<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=url()?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=url()?>/node_modules/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="<?=url()?>/node_modules/jquery-confirm/css/jquery-confirm.css">
    <?=$this->section("css");?>
</head>
<body>
    <div class="container mt-5">
        <?=$this->section('content');?>
    </div>

    <script src="<?=url()?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?=url()?>/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?=url()?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=url()?>/node_modules/jquery-confirm/js/jquery-confirm.js"></script>
    <?=$this->section("js");?>
</body>
</html>
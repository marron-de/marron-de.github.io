<?php
$currentFile = basename($_SERVER['PHP_SELF']);
$path = ($currentFile === 'index.php') ? '' : '../';

?>


<!-- jquery -->
<script src="<?php echo $path ?>js/jquery-3.6.0.min.js"></script>

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- datepicker -->
<link type="text/css" href="<?php echo $path ?>css/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $path ?>js/jquery-ui.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="<?php echo $path ?>css/common.css">
<link rel="stylesheet" href="<?php echo $path ?>css/style.css">
<link rel="stylesheet" href="<?php echo $path ?>css/responsive.css">

<!-- Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $path ?>css/NotoSans.css">
<link rel="stylesheet" href="<?php echo $path ?>css/Pretendard.css">
<link rel="stylesheet" href="<?php echo $path ?>css/Paperlogy.css">
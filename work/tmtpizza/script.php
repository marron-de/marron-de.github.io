<?php
$currentFile = basename($_SERVER['PHP_SELF']);
$path = ($currentFile === 'index.php') ? '' : '';

?>

<!-- jquery -->
<script src="<?php echo $path ?>js/jquery-3.7.1.min.js"></script>

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Phosphor Icons -->
<script src="https://unpkg.com/@phosphor-icons/web"></script>

<!-- CSS -->
<link rel="stylesheet" href="<?php echo $path ?>css/style.css">
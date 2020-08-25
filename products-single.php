<?php

require 'head.php';

$show_default = true;
require 'parts/organisms/menu-float.php';
require 'parts/organisms/cart.php';

echo '<div class="main-content main-content--background">';

require 'parts/organisms/locations-bar.php';
require 'parts/organisms/header.php';
require 'parts/organisms/products-content.php';
require 'parts/organisms/products-carousel.php';
require 'parts/organisms/footer.php';

echo '</div>';

require 'foot.php';

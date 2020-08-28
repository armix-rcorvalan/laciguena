<?php

require 'head.php';

$show_default = true;
require 'parts/organisms/menu-float.php';
require 'parts/organisms/cart.php';

echo '<div class="main-content">';

require 'parts/organisms/locations-bar.php';
require 'parts/organisms/locations-content.php';
require 'parts/organisms/header.php';
require 'parts/organisms/main-slider.php';
require 'parts/organisms/products-search-form.php';
require 'parts/organisms/wizard.php';
require 'parts/organisms/banner-slider.php';
require 'parts/organisms/products-carousel.php';
require 'parts/organisms/club-banner.php';
require 'parts/organisms/testimonials.php';
require 'parts/organisms/footer.php';

echo '</div>';

require 'foot.php';

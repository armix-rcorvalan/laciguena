<?php

require 'head.php';

$show_default = true;
require 'parts/organisms/menu-float.php';
require 'parts/organisms/filters-float.php';
require 'parts/organisms/cart.php';

echo '<div class="main-content main-content--background">';

require 'parts/organisms/locations-bar.php';
require 'parts/organisms/locations-content.php';
require 'parts/organisms/header.php';
require 'parts/organisms/products-search-form.php';
require 'parts/organisms/products-list.php';
require 'parts/organisms/footer.php';

echo '</div>';

require 'foot.php';

<?php

require 'head.php';

$show_default = true;
require 'parts/organisms/menu-float.php';
require 'parts/organisms/cart.php';

echo '<div class="main-content main-content--background-ty">';

require 'parts/organisms/locations-bar.php';
require 'parts/organisms/header.php';
require 'parts/organisms/thank-you.php';
require 'parts/organisms/footer.php';

echo '</div>';

require 'foot.php';

<?php

require 'head.php';

$show_default = true;
require 'parts/organisms/menu-float.php';
require 'parts/organisms/locations-bar.php';

echo '<div class="main-content">';

require 'parts/organisms/header.php';
require 'parts/molecules/form.php';
require 'parts/organisms/footer.php';

echo '</div>';

require 'foot.php';

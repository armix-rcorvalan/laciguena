<div class="testing">
	<div class="testing__inner global-inner">
		<?php
		for ( $i = 0; $i < 10; $i++ ) {

			switch ( $i ) {
				case 2:
					$class = 'products-item--featured';
					break;
				case 4:
					$class = 'products-item--out-stock';
					break;
				default:
					$class = '';
					break;
			}

			require TD . '/parts/molecules/products-item.php';
		}
		?>
	</div>
</div>

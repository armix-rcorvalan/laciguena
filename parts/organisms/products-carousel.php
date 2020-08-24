<div class="products-carousel">
	<div class="products-carousel__heading">
		<h3 class="products-carousel__subtitle subtitle-1">TIENDA</h3>
		<h2 class="products-carousel__title title-1">Productos destacados</h2>
	</div>
	<div class="products-carousel__carousel">
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
			echo '<div class="products-carousel__carousel-item">';
			require TD . '/parts/molecules/products-item.php';
			echo '</div>';
		}
		?>
	</div>
</div>

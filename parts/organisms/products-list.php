<div class="products-list">
	<div class="products-list__inner global-inner">
		<div class="products-list__filters-bar">
			<a href="#" class="products-list__filters-bar-open">FILTRAR POR ...</a>
			<a href="#" class="products-list__filters-bar-delete">BORRAR FILTRO <img src="images/close-icon.svg" class="products-list__filters-bar-delete-image"></a>
		</div>
		<div class="products-list__filters">
			<?php require TD . '/parts/molecules/filters.php'; ?>
		</div>
		<div class="products-list__main-content">
			<div class="products-list__breadcrumbs breadcrumbs">
				<ul class="breadcrumbs__list">
					<li class="breadcrumbs__item">
						<a href="#" class="breadcrumbs__link">Bebé</a>
					</li>
					<li class="breadcrumbs__item">
						<a href="#" class="breadcrumbs__link">Pañales</a>
					</li>
					<li class="breadcrumbs__item">
						<a href="#" class="breadcrumbs__link">Pampers</a>
					</li>
				</ul>
			</div>
			<div class="products-list__products">
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
			<div class="products-list__view-more">
				<a href="#" class="products-list__view-more.button button">Mostrar más productos</a>
			</div>
		</div>
	</div>
</div>
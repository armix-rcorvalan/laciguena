<div class="cart cart--large">
	<div class="cart__inner">
		<div class="cart__heading">
			<div class="cart__heading-text">
				<div class="cart__heading-title">Mi Carrito</div>
				<div class="cart__heading-count">3 productos</div>
			</div>
			<a href="#" class="cart__close"><img src="images/close-icon.svg" class="cart__close-image"></a>
		</div>
		<div class="cart__table">
			<?php require TD . '/parts/molecules/cart-table.php'; ?>
		</div>
		<div class="cart__totals">
			<div class="cart__totals-title">Subtotal (sin envío)</div>
			<div class="cart__totals-prices">
				<div class="cart__totals-price cart__totals-price--cash">
					<div class="cart__totals-price-name">EFECTIVO</div>
					<div class="cart__totals-price-value">$2.500</div>
				</div>
				<div class="cart__totals-price cart__totals-price--list">
					<div class="cart__totals-price-name">LISTA</div>
					<div class="cart__totals-price-value">$2.750</div>
				</div>
			</div>
			<div class="cart__totals-button-wrapper">
				<a href="" class="cart__button button">Iniciar la compra</a>
			</div>
		</div>
	</div>
</div>
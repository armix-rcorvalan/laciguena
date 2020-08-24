<?php if ( ! isset( $is_checkout ) ) { $is_checkout = false; } ?>
<table class="cart-table">
	<?php for ($i=0; $i < 3; $i++) : ?>
	<tr class="cart-table__row">
		<?php if ( ! $is_checkout ) : ?>
		<td class="cart-table__cell"><a href="#"><img src="images/close-icon.svg" class="cart-table__remove"></a></td>
		<?php endif; ?>
		<td class="cart-table__cell">
			<span class="cart-table__thumbnail"><img src="images/products-item.png" class="cart-table__thumbnail-image"></span>
		</td>
		<td class="cart-table__cell cart-table__cell--grow">
			<span class="cart-table__title">Pañales Pampers Confort Hiperpack</span>
			<span class="cart-table__description">Talle M <br>Cantidad 2</span>
		</td>
		<td class="cart-table__cell">
			<span class="cart-table__prices">
				<span class="cart-table__price cart-table__price--cash">
					<span class="cart-table__price-name">EFECTIVO</span>
					<span class="cart-table__price-value">$2.500</span>
				</span>
				<span class="cart-table__price cart-table__price--list">
					<span class="cart-table__price-name">LISTA</span>
					<span class="cart-table__price-value">$2.750</span>
				</span>
			</span>
		</td>
	</tr>
	<?php endfor; ?>
</table>
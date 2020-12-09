<header class="header">
	<div class="header__inner">
		<a class="header__menu-icon" href="#">
			<img class="header__menu-icon-image" src="images/menu-icon.svg">
		</a>
		<h1 class="header__logo">
			<a href="#" class="header__logo-link">
				<img src="images/logo.svg" alt="La Cigueña" class="header__logo-image">
			</a>
		</h1>
		<div class="header__menu">
			<?php $show_default = false; ?>
			<?php require TD . '/parts/molecules/menu-main.php'; ?>
		</div>
		<a class="header__search-icon" href="#">
			<img class="header__search-icon-image" src="images/search-icon-black.svg">
		</a>
		<a class="header__user-icon" href="#">
			<img class="header__user-icon-image" src="images/user-icon.svg">
		</a>
		<a class="header__cart-icon" href="#">
			<span class="header__cart-icon-wrapper">
				<img class="header__cart-icon-image" src="images/cart-icon.svg">
				<span class="header__cart-icon-count">8</span>
			</span>
		</a>
	</div>
</header>

# La Cigueña

Esta información la voy a ir actualizando

## Preview
[Home](https://armix.com.ar/staging/lc/) https://armix.com.ar/staging/lc/

## HTML
Cree una carpetita que se llama html para q el copy paste sea mas facil

## Estilos
Agregar globalmente el archivo

```html
 /stylesheets/style.css
```

Agregar fuentes de Google y viewports

```html
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
```

## Javascripts

Agregar jQuery

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
```

Menu Mobile + Efecto de blur

```html
javascripts/menu-float.js
```

## Estructura de Módulos

Para poder hacer ciertas animaciones necesito que se respete esta estructura de módulos

```html
<body>
	...
	<div class="menu-float">...</div>
	<a href="#" class="locations-bar">...</a>
	<div class="main-content">
		<header class="header">...</header>
		...
		<footer class="footer">...</footer>
	</div>
	...
</body>
```

## Lectura Recomendada
Son 5 minutos de leer que creo que les va a servir mucho de como estan escritas las clases CSS y las estructuras de archivos

[BEM Notation](https://webdesign.tutsplus.com/es/articles/an-introduction-to-the-bem-methodology--cms-19403)

[ATOMIC DESIGN](https://bradfrost.com/blog/post/atomic-web-design/)

## Estado

### General
- [x] Locations Bar
- [ ] Locations Content
- [x] Header
- [ ] Header Search
- [ ] Cart
- [x] Footer

### Home
- [ ] main-slider
- [ ] products-search-form
- [ ] wizard
- [ ] banner-slider
- [ ] products-carousel
- [ ] club
- [ ] testimonials

### Shop
- [ ] products-search-form
- [ ] products-filters
- [ ] products-breadcrumbs
- [ ] products-list

### Product Single
- [ ] products-breadcrumbs
- [ ] products-gallery
- [ ] products-details
- [ ] products-carousel

### Checkout
- [ ] single-cover
- [ ] checkout-form

### Checkout
- [ ] single-cover
- [ ] checkout-form

### Thank You
- [ ] thank-you

### Club
- [ ] image-cover
- [ ] club-details
- [ ] club-table

### Generic Page
- [ ] image-cover
- [ ] editor


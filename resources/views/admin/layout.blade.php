<!DOCTYPE html>
<html lang="es">

<head>
	<title>Shop</title>
	@include("layout.head")
</head>

<body>
	@include("layout.menu")
	<div class="super_container">
		@include("layout.header")
        @yield("contenido")
	</div>

	@include("layout.footer")
	@include("layout.scripts")
</body>

</html>
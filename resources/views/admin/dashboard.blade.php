<!DOCTYPE html>
<html lang="es">

@include("admin.layout.head")

<body>
	<div class="wrapper">
		@include("admin.layout.navbar")
		@include("admin.layout.sidebar")
		@include("admin.layout.content")
		@include("admin.layout.footer")

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
	</div>

	@include("admin.layout.scripts")
</body>
</html>
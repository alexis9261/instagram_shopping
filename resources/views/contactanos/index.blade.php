<!DOCTYPE html>
<html>
<head>
	<title>Servicios Eutuxia</title>
	@include('common.head')
</head>
<body>
	<header class="contactanos_header">
		@include('home.menu')
		<div class="contactanos_header_body">
			<h2 class="contactanos_header_title">Dinos Hola</h2>
			<form>
				<div class="input_contactanos">
					<input type="text" name="name" placeholder="Nombre...">
				</div>
				<div class="input_contactanos">
					<input type="text" name="email" placeholder="Correo...">
				</div>
				<div class="input_contactanos">
					<textarea name=""></textarea>
				</div>
				<input class="contactanos_submit" type="submit">
			</form>
		</div>
	</header>
	<footer>
		footer
	</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/mystyles.css">
	<script src="../js/micodigo.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-icons.css">
</head>
<body class="cuerpo">
	<div class="caja lista">
		<a href="../det.php"><img src="../images/let.png" class="img_logo"></a>
		<nav>
			<ul>
				<li><a href="../stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
				<li><a href="../cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
				<li><a href="../inventario.php" class="btn btn-outline-dark cursor"><b>Inventario</b></a></li>
			</ul>
		</nav>

		<div class="usu">
			<?php
				session_start();
				$user = $_SESSION['nombre'];

				if(!isset($user)){
					header("location: index.php");

				}

				echo "<p>$user</p>";
			?>
		</div>

		<div class="dropdown1">
  			<button class="dropbtn"><i class="bi bi-person-lines-fill"></i></button>
  			<div class="dropdown-content">
    			<a href="../salir.php"> Cerrar sesion </a>
  			</div>
		</div>
	</div>

	<center>
		<div class="caj">
			<h1 class="sep_ti">AGREGAR PEDIDO</h1>
		</div>
	</center>
	
		<div class="caja_img">
			<center>
				<form action="guardar_pedido.php" method="POST" enctype="multipart/form-data"><br>
					<input class="" type="text" REQUIRED name="cliente" placeholder="Cliente"/><br><br>
					<input class="" type="text" REQUIRED name="telefono" placeholder="Telefono celular"/><br><br>
					<input class="" type="text" REQUIRED name="producto" placeholder="Pieza de pan"/><br><br>
					<input class="" type="number" REQUIRED name="precio" placeholder="Precio"/><br><br>
					<input class="" type="number" REQUIRED name="cantidad" placeholder="Cantidad"/><br><br>
					<button class="btn btn-outline-dark cursor b_mo">Agregar</button>
				</form>
			</center>
		</div>
</body>
</html>
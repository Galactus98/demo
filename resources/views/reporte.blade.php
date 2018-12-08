<!DOCTYPE html>
<html>
	<head>
		<title>Reportes</title>
		<meta charset="UTF-8"/>
	</head>
	<body align="center">
		<h1>Reporte</h1> <!-- Crea titulo -->
		<table border="1" align="center"> <!-- Crea borde de la tabla -->
			<tr> <!-- Crea registro de tabla -->
				<th>Clave</th> <!-- Crea encabezado de la tabla -->
				<th>Producto</th> <!-- Crea encabezado de la tabla -->
				<th>Tipo</th> <!-- Crea encabezado de la tabla -->
				<th>Marca</th> <!-- Crea encabezado de la tabla -->
				<th>Pais</th> <!-- Crea encabezado de la tabla -->
			</tr>
			@foreach($reporte as $r) <!-- Genera un arreglo de datos -->
			<tr> <!-- Crea registro de tabla -->
				<td>{{$r->clave}}</td> <!-- Crea campo de la tabla -->
				<td>{{$r->producto}}</td> <!-- Crea campo de la tabla -->
				<td>{{$r->tipo}}</td> <!-- Crea campo de la tabla -->
				<td>{{$r->marca}}</td> <!-- Crea campo de la tabla -->
				<td>{{$r->pais}}</td> <!-- Crea campo de la tabla -->
			</tr>
			@endforeach <!-- Cierra el arreglo de datos -->
		</table>
	</body>
</html>
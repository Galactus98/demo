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
			<?php $__currentLoopData = $reporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Genera un arreglo de datos -->
			<tr> <!-- Crea registro de tabla -->
				<td><?php echo e($r->clave); ?></td> <!-- Crea campo de la tabla -->
				<td><?php echo e($r->producto); ?></td> <!-- Crea campo de la tabla -->
				<td><?php echo e($r->tipo); ?></td> <!-- Crea campo de la tabla -->
				<td><?php echo e($r->marca); ?></td> <!-- Crea campo de la tabla -->
				<td><?php echo e($r->pais); ?></td> <!-- Crea campo de la tabla -->
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- Cierra el arreglo de datos -->
		</table>
	</body>
</html>
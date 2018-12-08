<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteController extends Controller
{
    public function consulta() {
		$resultado=\DB::select("SELECT r.clave,r.id_prod,r.id_tipo,r.id_marca, r.id_pais, pr.producto AS producto, t.nombre AS tipo, m.nombre AS marca, p.nombre AS pais, r.deleted_at
        FROM reportes AS r
        INNER JOIN productos AS pr ON pr.idpr = r.id_prod
		INNER JOIN tipos AS t ON t.idt = r.id_tipo
		INNER JOIN marcas AS m ON m.idm = r.id_marca
		INNER JOIN paises AS p ON p.idp = r.id_pais");
		return view('reporte')
		->with('reporte', $resultado);
	}
}

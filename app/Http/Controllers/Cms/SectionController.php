<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\Section;

class SectionController extends Controller
{
 	public function index()
 	{	
 		$secciones = Section::all();
 		return view('cms.secciones.secciones')->with(compact('secciones'));
 	}  


 	public function guardarSeccion(Request $request)
 	{
 		Section::create($request->all());

 		return back()->with('message', 'Sección creada');
 	}

 	public function obtenerSeccion($id)
 	{
 		$seccion = Section::find($id)->section;

 		return $seccion;
 	}

 	public function actualizarSeccion(Request $request, $id)
 	{
 		$seccion = Section::find($id);

 		$seccion->update($request->all());

 		return back()->with('message', 'Sección actualizada con éxito!');
 	}

 	public function eliminarSeccion($id)
 	{
 		$seccion = Section::find($id);

 		$seccion->delete();

 		return back()->with('error', 'Se ha eliminado la sección correctamente!');
 	}
}

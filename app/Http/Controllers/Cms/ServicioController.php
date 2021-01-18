<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\Service;
use App\Cms\Section;

use Storage; 
use Str; 

class ServicioController extends Controller
{
    public function index()
    {
    	$servicios = Service::all();

    	return view('cms.servicios.servicios')->with(compact('servicios'));
    }

    public function crearServicio()
    {
    	$secciones = Section::all();

    	return view('cms.servicios.crear_servicio')->with(compact('secciones'));
    }

    public function guardarServicio(Request $request)
    {
    	$path = $request->file('service_imagen')->store('public');

    	$file = Str::replaceFirst('public/', '',$path);

    	Service::create([
    		'service' => $request->service,
    		'section_id' => 2,
    		'imagen' => $file
    	]);

    	return back()->with('message', 'Se ha guardado el servicio con éxito!');
    }

    public function editarServicio($id)
    {
    	$servicio = Service::find($id);
    	$secciones = Section::all();

    	return view('cms.servicios.editar_servicio')->with(compact('secciones', 'servicio'));
    }


    public function actualizarServicio(Request $request, $id)
    {
    	$servicio = Service::find($id);

    	if($request->file('service_image')){
    		$deleted = Storage::disk('public')->delete($servicio->imagen);

    		if(isset($deleted) || $servicio->imagen == null)
    		{
    			$path = $request->file('service_image')->store('public');

    			$file = Str::replaceFirst('public/', '',$path);

    			$servicio->update([
    				'service' => $request->service,
    				'imagen' => $file
    			]);

    			return back()->with('message', 'Servicio actualizado con éxito');
    		}
    	} else {
    		$servicio->update([
    			'service' => $request->service,
    		]);

    		return back()->with('message', 'Servicio actualizado con éxito');
    	}
    }


    public function eliminarServicio($id)
    {
    	$servicio = Service::find($id);

    	$deleted = Storage::disk('public')->delete($servicio->imagen);

		if(isset($deleted) || $servicio->imagen == null)
		{
			$servicio->delete();
			return back()->with('error', 'Servicio eliminado con éxito');
		} else {
			return back()->with('error', 'No se pudo eliminar el servicio');
		}
    }

}

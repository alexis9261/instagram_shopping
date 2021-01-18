<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\ServiceBanner;
use App\Cms\Service;

use Storage; 
use Str; 


class ServiceBannerController extends Controller
{
    public function index($id)
    {
	    $service = Service::find($id);

		$banners = $service->banners;

		return view('cms.banners_servicios.banners_servicio')->with(compact('banners', 'service'));
    }

    public function crearBannerServicio($id)
    {
    	$servicio = $id;

    	return view('cms.banners_servicios.crear_banner_servicio')->with(compact('servicio'));
    }

    public function guardarBannerServicio(Request $request)
    {
    	$path = $request->file('banner_imagen')->store('public');

    	$file = Str::replaceFirst('public/', '',$path);

    	$banner = new ServiceBanner;

    	$banner->create([
    	    'title' => $request->title,
    	    'subtitle' => $request->subtitle,
    	    'service_id' => $request->service_id,
    	    'imagen' => $file,
    	]);

    	return back()->with('message', 'Banner de servicio creado con éxito');
    }


    public function editarBannerServicio($service, $id)
    {
    	$banner = ServiceBanner::find($id);

    	$servicio = $service;

    	return view('cms.banners_servicios.editar_banner_servicio')->with(compact('banner', 'servicio'));
    }

    public function actualizarBannerServicio(Request $request, $id)
    {
    	$banner = ServiceBanner::find($id);

    	if($request->file('banner_imagen'))
    	{

    	    $deleted = Storage::disk('public')->delete($banner->imagen);

    	    if(isset($deleted) || $banner->imagen == null)
    	    {
    	        $path = $request->file('banner_imagen')->store('public');

    	        $file = Str::replaceFirst('public/', '',$path);

    	        $banner->update([
    	            'title' => $request->title,
    	            'subtitle' => $request->subtitle,
    	            'service_id' => $request->service_id,
    	            'imagen' => $file,
    	        ]);
    	        return back()->with('message', 'Banner actualizado correctamente');

    	    } else {
    	        return back()->with('message', 'No se pudo actualizar la imagen');
    	    }   

    	} else {
    	    $banner->update([
    	        'title' => $request->title,
    	        'subtitle' => $request->subtitle,
    	        'service_id' => $request->service_id,
    	    ]);

    	    return back()->with('message', 'Banner actualizado correctamente');
    	}
    }


    public function eliminarBannersServicio($id)
    {
    	$banner = ServiceBanner::find($id);

        $deleted = Storage::disk('public')->delete($banner->imagen);

        if(isset($deleted) || $banner->imagen == null)
        {
            $banner->delete();
            return back()->with('error', 'Banner eliminado con éxito');
        } else {
            return back()->with('error', 'No se pudo eliminar el banner');
        }
    }

}

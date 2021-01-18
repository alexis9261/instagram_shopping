<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\ProjectBanner;
use App\Cms\Project;

use Storage; 
use Str; 

class ProjectBannerController extends Controller
{
        public function index($id)
        {
    	    $project = Project::find($id);

    		$banners = $project->banners;


    		return view('cms.banners_proyectos.banners_proyectos')->with(compact('banners', 'project'));
        }

        public function crearBannerProyecto($id)
        {
        	$proyecto = $id;

        	return view('cms.banners_proyectos.crear_banner_proyecto')->with(compact('proyecto'));
        }

        public function guardarBannerProyecto(Request $request)
        {
        	$path = $request->file('banner_imagen')->store('public');

        	$file = Str::replaceFirst('public/', '',$path);

        	$banner = new ProjectBanner;

        	$banner->create([
        	    'title' => $request->title,
        	    'subtitle' => $request->subtitle,
        	    'project_banners_id' => $request->project_id,
        	    'imagen' => $file,
        	]);

        	return back()->with('message', 'Banner de proyecto creado con éxito');
        }


        public function editarBannerProyecto($proyecto, $id)
        {
        	$banner = ProjectBanner::find($id);

        	$proyecto = $proyecto;

        	return view('cms.banners_proyectos.editar_banner_proyecto')->with(compact('banner', 'proyecto'));
        }

        public function actualizarBannerProyecto(Request $request, $id)
        {
        	$banner = ProjectBanner::find($id);

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
        	            'project_banners_id' => $request->project_id,
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
        	        'project_banners_id' => $request->project_id,
        	    ]);

        	    return back()->with('message', 'Banner actualizado correctamente');
        	}
        }


        public function eliminarBannersProject($id)
        {
        	$banner = ProjectBanner::find($id);

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

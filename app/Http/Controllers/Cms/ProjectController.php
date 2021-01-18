<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\Project;
use App\Cms\Section;


use Storage; 
use Str; 


class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('cms.proyectos.proyectos')->with(compact('projects'));
    }

    public function crearProyecto()
    {

    	$secciones = Section::all();

    	return view('cms.proyectos.crear_proyecto')->with(compact('secciones'));
    }

    public function guardarProyecto(Request $request)
    {
    	$path = $request->file('project_imagen')->store('public');

    	$file = Str::replaceFirst('public/', '',$path);

    	$project = new Project;

    	$project->create([
    		'project' => $request->project,
    		'section_id' => 3,
    		'imagen' => $file, 
    	]);


    	return back()->with('message', 'Projecto creado con éxito');

    }


    public function editarProyecto($id)
    {
    	$project =  Project::find($id);
    	$secciones = Section::all();

    	return view('cms.proyectos.editar_proyecto')->with(compact('secciones', 'project'));
    }

    public function actualizarProyecto(Request $request, $id)
    {
    	$project =  Project::find($id);

    	if($request->file('project_imagen'))
    	{

    	    $deleted = Storage::disk('public')->delete($project->imagen);

    	    if(isset($deleted) || $project->imagen == null)
    	    {
    	        $path = $request->file('project_imagen')->store('public');

    	        $file = Str::replaceFirst('public/', '',$path);

    	        $project->update([
    	        	'project' => $request->project,
    	        	'imagen' => $file, 
    	        ]);
    	        
    	        return back()->with('message', 'Proyecto actualizado correctamente');

    	    } else {

    	        return back()->with('message', 'No se pudo actualizar la imagen');
    	    }   

    	} else {

    	    $project->update([
    	    	'project' => $request->project,
    	    ]);

    	    return back()->with('message', 'Proyecto actualizado correctamente');
    	}
    }

    public function eliminarProyecto($id)
    {	
    	$project =  Project::find($id);

    	$deleted = Storage::disk('public')->delete($project->imagen);

    	if(isset($deleted) || $project->imagen == null)
    	{
    	    $project->delete();
    	    return back()->with('error', 'Proyecto eliminado con éxito');
    	} else {
    	    return back()->with('error', 'No se pudo eliminar el proyecto');
    	}
    }

}

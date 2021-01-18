<?php

namespace App\Http\Controllers\Cms\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog\BlogCategory;
use Storage;
use Str;
class CategoryController extends Controller
{
    public function index()
    {
    	$categorias = BlogCategory::all();

    	return view('cms.blog.categorias.index', compact('categorias'));
    }

    public function crearCategoria()
    {
    	return view('cms.blog.categorias.crear_categoria');
    }

    public function guardarCategoria(Request $request)
    {
    	$path = $request->file('image')->store('public');

    	$file = Str::replaceFirst('public/', '',$path);

    	$category = new BlogCategory;

    	$category->create([
    	    'title' => $request->title,
    	    'description' => $request->description,
    	    'image' => $file,
    	]);

    	return back()->with('message', 'Categoria creada con éxito');
    }


    public function editarCategoria($id)
    {
    	$categoria = BlogCategory::find($id);

    	return view('cms.blog.categorias.editar_categoria', compact('categoria'));
    }


    public function actualizarCategoria(Request $request, $id)
    {

    	$categoria = BlogCategory::find($id);

    	if($request->file('image'))
    	{
    		$deleted = Storage::disk('public')->delete($categoria->image);

    		if(isset($deleted) || $categoria->image == null)
    		{
    			$path = $request->file('image')->store('public');

    			$file = Str::replaceFirst('public/', '',$path);

    			$categoria->update([
    			    'title' => $request->title,
    			    'description' => $request->description,
    			    'image' => $file,
    			]);
    		} else {
    			return back()->with('error', 'No se pudo actualizar la categoria');
    		}


    	} else {
    		$categoria->update([
    		    'title' => $request->title,
    		    'description' => $request->description,
    		]);
    	}

    	return back()->with('message', 'Categoria actualizada con éxito');
    }

    public function eliminarCategoria($id)
    {
    	$categoria = BlogCategory::find($id);

    	$deleted = Storage::disk('public')->delete($categoria->image);

    	if(isset($deleted) || $categoria->image == null)
    	{
    		$categoria->delete();

    		return back()->with('error', 'Categoria eliminada con éxito');
    	} else {
    		return back()->with('error', 'No se pudo eliminar la categoria');
    	}
    }

}

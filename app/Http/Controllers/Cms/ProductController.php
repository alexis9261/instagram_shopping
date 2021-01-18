<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Cms\Product;
use App\Cms\Section;

use Storage; 
use Str; 

class ProductController extends Controller
{

	public function index(){
		$products = Product::all();
	    return view('cms.productos.productos')->with(compact('products'));
	}

	public function crearProducto()
	{
		$secciones = Section::all();
		return view('cms.productos.crear_producto')->with(compact('secciones'));
	}


	public function guardarProducto(Request $request){
		$path = $request->file('product_image')->store('public');

		$file = Str::replaceFirst('public/', '',$path);

		$producto = new Product;
		$producto->create([
			'product' => $request['product'],
			'imagen' => $file,
			'section_id' => 1
		]);

		return back()->with('message', 'Producto creado con éxito');

	}

	public function editarProducto($id)
	{

		$product = Product::find($id);
		$secciones = Section::all();
		return view('cms.productos.editar_producto')->with(compact('product', 'secciones'));
	}

	public function actualizarProducto(Request $request,$id)
	{
		$product = Product::find($id);

		if($request->file('product_image')){
			$deleted = Storage::disk('public')->delete($product->imagen);

			if(isset($deleted) || $product->imagen == null)
			{
				$path = $request->file('product_image')->store('public');

				$file = Str::replaceFirst('public/', '',$path);

				$product->update([
					'product' => $request->product,
					'imagen' => $file
				]);

				return back()->with('message', 'Producto actualizado con éxito');
			}
		} else {
			$product->update([
				'product' => $request->product,
			]);

			return back()->with('message', 'Producto actualizado con éxito');
		}
	}

	public function eliminarProducto($id)
	{
		$product = Product::find($id);

		$deleted = Storage::disk('public')->delete($product->imagen);

		if(isset($deleted) || $product->imagen == null)
		{
			$product->delete();
			return back()->with('error', 'Producto eliminado con éxito');
		} else {
			return back()->with('error', 'No se pudo eliminar el producto');
		}


	}
}

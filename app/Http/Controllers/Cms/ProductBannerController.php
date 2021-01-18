<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\ProductBanner;
use App\Cms\Product;

use Storage; 
use Str; 

class ProductBannerController extends Controller
{
    public function index($id)
    {

        $product = Product::find($id);

    	$banners = $product->banners;
    	return view('cms.banners_productos.banners_producto')->with(compact('banners', 'product'));
    }

    public function crearBannerProducto(Request $request, $id)
    {
    	
    	$producto = $id;
    	return view('cms.banners_productos.crear_banner_producto')->with(compact('producto'));
    }

    public function guardarBannerProducto(Request $request)
    {
        $path = $request->file('banner_imagen')->store('public');

        $file = Str::replaceFirst('public/', '',$path);

        $banner = new ProductBanner;

        $banner->create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'product_id' => $request->product_id,
            'imagen' => $file,
        ]);

        return back()->with('message', 'Banner de producto creado con éxito');
    }

    public function editarBannerProducto($product, $id)
    {
        $producto = $product;
        $banner = ProductBanner::find($id);

        return view('cms.banners_productos.editar_banner_producto')->with(compact('producto', 'banner'));
    }


    public function actualizarBannerProducto(Request $request, $id)
    {
        $banner = ProductBanner::find($id);

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
                    'product_id' => $request->product_id,
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
                'product_id' => $request->product_id,
            ]);

            return back()->with('message', 'Banner actualizado correctamente');
        }
    }

    public function eliminarBannerProducto($id)
    {
        $banner = ProductBanner::find($id);

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

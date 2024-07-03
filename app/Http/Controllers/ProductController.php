<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|max:150',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);

        $products = Product::all();

        return view('products.index', compact('products'))->with('success', 'Producto creado correctamente!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json([
            'status' => true,
            'message' => 'ok',
        ], 200);
    }

    public function detail($id)
    {

        try {


            // //Proveedores de la db
            // $proveedores = Usuario::whereHas('detalle_roles', function ($query) {
            //     $query->where('role_id', 5);
            // })->whereNull('bloqueado_por')->pluck('nombres', 'usuario_id');

            // //categorias de la db

            // $categorias = Categoria::whereNull('bloqueado_por')->pluck('categoria', 'categoria_id');

            // //estantes de la db
            // $estantes = Estante::whereNull('bloqueado_por')->pluck('estante', 'estante_id');

            // // //unidades de la db

            // $unidades = Unidad_Medida::whereNull('bloqueado_por')->pluck('nombre', 'unidad_medida_id');


            // // //periodos de la db

            // $periodos = Periodo::whereNull('bloqueado_por')->pluck('fecha_inicio', 'periodo_id');


            $product = Product::find($id);

            // Verifica si el registro existe
            if (!$product) {
                return redirect()->back()->with('error', 'Ha ocurrido un error. No se pudo realizar la operación.');
            }

            return view('products.detail', compact('product'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('products')->with('error', 'Error al cargar la página para editar el producto');
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->route('/products')->with('alert-success', 'Producto eliminado correctamente');
        } else {
            return redirect()->route('/products')->with('alert-danger', 'Producto no encontrado');
        }
    }

}

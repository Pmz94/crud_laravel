<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Redirect;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller {

    public function demo() {
        echo "Hola Mundo";
    }

    public function index() {
        $products = Producto::orderBy('id', 'DESC')->paginate(10);
        return view('productos.index', compact('products'));
    }

    public function create() {
        return view('productos.create');
    }

    public function store(ProductoRequest $request) {
        $product = new Producto;

        $product->nombre = $request->nombre;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();

        return redirect()->route('productos.index')->with('info', 'Producto Creado');
    }

    public function edit($id) {
        $product = Producto::find($id);
        return view('productos.edit', compact('product'));
    }

    public function update(ProductoRequest $request, $id) {
        $product = Producto::find($id);

        $product->nombre = $request->nombre;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();

        return redirect()->route('productos.index')->with('info', 'Producto Actualizado');
    }

    public function show($id) {
        $product = Producto::find($id);
        return view('productos.show', compact('product'));
    }

    public function destroy($id) {
        $product = Producto::find($id);
        $product->delete();
        return back()->with('info', 'Producto Eliminado');
    }
}
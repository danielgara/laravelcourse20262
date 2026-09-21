<?php

/*
 * Actividad 4: listar objetos (solo id y name), con link al id.
 */
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id')->get(['id', 'name']);
        $data = ['product' => $product];

        return view('products.index', $data);
    }

    /*
    * Actividad 5: mostrar todos los atributos del objeto.
    */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }
}
<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Item;

class ProductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $products = Product::orderBy('id','DESC')->paginate();
      // dd($products); // Muestra objeto
      return view('admin.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

   // Muestra formulario
  public function create()
  {
    $items = Item::orderBy('name', 'ASC')->get();
    return view('admin.products.create', compact('items'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $product = Product::create($request->all());

      return redirect()->route('products.edit', $product->id)
          ->with('info', 'Categoria creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $product = Product::find($id);

      return view('admin.products.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $product = Product::find($id);
    $items = Item::orderBy('name', 'ASC')->get();
    return view('admin.products.edit', compact('product', 'items'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $product = Product::find($id);

      $product->fill($request->all())->save();

      return redirect()->route('products.edit', $product->id)
          ->with('info', 'Categoria actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $product = Product::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente ');
  }
}

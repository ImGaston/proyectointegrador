class ProductsController extends Controller {
  public function detail($id) {
    $product = Products::find($id);
    return view('product-detail', [
      "product" => $product
    ]);
  }
}

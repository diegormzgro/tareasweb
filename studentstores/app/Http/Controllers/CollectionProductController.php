<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Collection;
use App\Models\Product;

class CollectionProductController extends BaseController
{
    public function create(Request $req, Collection $collection) {
        $data = [];
        $data['collection'] = $collection;
        $data['products'] = Product::all();
        return view('collections.product.create', ['data' => $data]);
    }

    public function store(Request $req, Collection $collection) {
        $product = Product::find($req->input('collection_product.product_id'));
        $collection->products()->attach($product->id);
        return redirect()->route('collections.show', ['collection' => $collection]);
    }
}

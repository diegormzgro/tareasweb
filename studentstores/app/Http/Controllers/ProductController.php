<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Collection;
use App\Models\Order;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $orderInput;
    private $orden;


    public function index()
    {
        print_r("abcde");
        $products = Product::all();
        //dd($products);
        $data = [];
        $data['products'] = $products;
        return view('products.index', $data);
    }

    public function indexuser()
    {
        //
        $products = Product::all();
        //dd($products);
        $data = [];
        $data['products'] = $products;
        return view('products.indexuser', $data);
    }

    public function cart(Request $req, $discount = null)
    {
        $preciorebajado = $discount;
        dump($preciorebajado);

        if ($discount) {
            print_r("entro al if");
            $preciorebajado = $discount - ($discount * 0.20);
            dump($preciorebajado);
            
            

        }
        else
        {
            print_r("entro al else");
            $preciorebajado = $discount;
        }
        $orderInput['status'] = false;
        $orderInput['total'] = 1235.25;

        $orden = Order::create($orderInput);
        dump($orden);

        $products = Product::all();
        $data = [];
        $data['products'] = $products;
        $data['discount'] = $preciorebajado;

        return view('products.cart', ['totaldescuento' => $preciorebajado]);
        //return view('products.cart');
    }

    public function discount($total)
    {
            return "entró al discount";
    }

    public function addToCart($id)
    {
            print("entro al cart");
            $product = Product::find($id);
     
            if(!$product) {
     
                abort(404);
     
            }
     
            $cart = session()->get('cart');
     
            // if cart is empty then this the first product
            if(!$cart) {
     
                $cart = [
                        $id => [
                            "name" => $product->name,
                            "quantity" => 1,
                            "price" => $product->price,
                            "photo" => $product->photo
                        ]
                ];
     
                session()->put('cart', $cart);
     
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
     
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
     
                $cart[$id]['quantity']++;
     
                session()->put('cart', $cart);
     
                return redirect()->back()->with('success', 'Product added to cart successfully!');
     
            }
     
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
     
            session()->put('cart', $cart);
     
            return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updatecart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function removecart(Request $request)
    {
        dd("entro al remove");
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function transaction(Request $req) {
        $data = [];
        // $data['cart'] = $cart;
        $data['transaction'] = 'transaction-done';
        // Verifique el Ordcar er ID que te envía Paypal sea válido.
        // Ver la documentación de Paypal
        // Modificar tu orden a un estatus de pagada.
        $orderInput['status'] = true;
        $orden->update($ordentInput);

        return response()->json($data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['collections'] = Collection::all();
        return view('products.create', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productInput = $request->input('product');
        ($productInput);
        $product = Product::create($productInput);

        
        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $data['collections'] = Collection::all();
        

        return view('products.edit', compact('product'), ['data'=>$data]);
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
        
        
        $productInput = $request->input('product');
        
        /**
         *  $request->validate([
         * 'product[name]'=>'required',
           * 'product[description]'=> 'required|integer',
           * 'product[price]' => 'required|integer',
           * 'product[discount_price]' => 'required|integer'
          *]);
         * 
         */
       

         // dd($productInput);
    
          $product = Product::find($id);
          $product->update($productInput);
          
          
        
          return redirect('/products')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Stock has been deleted Successfully');
    }

    
}

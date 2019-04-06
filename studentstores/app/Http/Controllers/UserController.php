<?php
namespace App\Http\Controllers;

use DB;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        //
        $users = User::all();
        //dd($products);
        $data = [];
        $data['users'] = $users;
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userInput = $request->input('user');
        //($collectionInput);
        $user = User::create($userInput);
        //dd($user);
        $tempid = $user->id;
        //dd($tempid);
        $products = Product::all();
        //dd($products);
        $data = [];
        $data['products'] = $products;
        $data['tempid'] = $tempid;
        return view('users.viewproducts', $data );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $data = [];
        $data['user'] = $user;
                
        return view('users.show', ['user'=>$user, 'data'=>$data] );
    }

    public function viewproducts($id)
    {
        $users = User::all();
        //dd($products);
        $data = [];
        $data['users'] = $users;

        $products = Product::all();
        //dd($products);
        $data['products'] = $products;
        return view('users.viewproducts', $data);
       
       
    }

    public function products()
    {
        
        return view('users.products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

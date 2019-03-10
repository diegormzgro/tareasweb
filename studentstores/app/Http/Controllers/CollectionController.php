<?php
namespace App\Http\Controllers;

use DB;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



use App\Models\Product;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        //dd($products);
        $data = [];
        $data['collections'] = $collections;
        return view('collections.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collectionInput = $request->input('collection');
        ($collectionInput);
        $collection = Collection::create($collectionInput);
        
        return redirect()->route('collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $ordenamiento = $request->input('orden');
        

        
        //dd($tecno);
        $collection = Collection::find($id);

            $ascs = DB::table('products')
                                ->where('collection_id', $id)
                                ->orderBy('name', 'asc')
                                ->get();

            
        
            //descendente
            $descs = DB::table('products')
                                ->where('collection_id', $id)
                                ->orderBy('name', 'desc')
                                ->get();


            $ascprecios = DB::table('products')
                                ->where('collection_id', $id)
                                ->orderBy('price', 'asc')
                                ->get();

            
        
            //descendente
            $descprecios = DB::table('products')
                                ->where('collection_id', $id)
                                ->orderBy('price', 'desc')
                                ->get();
        
        
        
        return view('collections.show', ['collection'=>$collection, 'ordenamiento' => $ordenamiento, 'ascs' => $ascs, 'descs' => $descs, 'ascprecios' => $ascprecios, 'descprecios' => $descprecios] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::find($id);
        /**$data['collections'] = Collection::all(); */
        

        return view('collections.edit', compact('collection'));
    }

    public function removeproduct($id)
    {
        DB::table('products')
            ->where('collection_id', $id)
            ->update(['collection_id' => null]);
        
        

        return view('collections.show', compact('collection'));
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
        $collectionInput = $request->input('collection');
       

         // dd($collectionInput);
    
          $collection = Collection::find($id);
          $collection->update($collectionInput);
          
          
        
          return redirect('/collections')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::find($id);
        $collection->delete();

        return redirect('/collections')->with('success', 'Stock has been deleted Successfully');
    }
}

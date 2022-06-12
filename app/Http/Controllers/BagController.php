<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'bags';
        $Products = Bag::all(); 
        $ImageFolder = $page_title;
        $ProductName = ucfirst($ImageFolder);
        $ProductNameForRoute = ucfirst($ImageFolder);
        
        return view('Bags', [
            'page_title' => ucwords($page_title),
            'ImageFolder' => $ImageFolder,
            'Products' => $Products,
            'MostPopular' => $Products, 
            'ProductName' => $ProductName,
            'ProductNameForRoute' => $ProductNameForRoute, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function show($ProductId)
    { 
        $Products = Bag::all();  
        $ImageFolder = 'bags';  
        $ProductNameForRoute = ucfirst($ImageFolder);
        
        return view('PurchaseNow', [ 
            'RelatedProducts' => $Products,  
            'MostPopular' => $Products, 
            'Products' => $Products, 
            'ImageFolder' => $ImageFolder,  
            'ProductNameForRoute' => $ProductNameForRoute,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function edit(Bag $bag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bag $bag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bag $bag)
    {
        //
    }
}

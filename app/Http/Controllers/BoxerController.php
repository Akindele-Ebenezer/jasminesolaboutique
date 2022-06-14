<?php

namespace App\Http\Controllers;

use App\Models\Boxer;
use Illuminate\Http\Request;

class BoxerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'boxers';
        $Products = Boxer::inRandomOrder()->get(); 
        $MostPopular = Boxer::inRandomOrder()->get();
        $ImageFolder = $page_title;
        $ProductName = ucfirst($ImageFolder);
        $ProductNameForRoute = ucfirst($ImageFolder);
        $PageTitleBg = $page_title . '-bg.jpg';
        
        return view('Boxers', [
            'PageTitleBg' => $PageTitleBg,
            'page_title' => ucwords($page_title),
            'ImageFolder' => $ImageFolder,
            'Products' => $Products,
            'MostPopular' => $MostPopular, 
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
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function show($ProductId)
    {
        $Products = Boxer::inRandomOrder()->get(); 
        $MostPopular = Boxer::inRandomOrder()->get();
        $ImageFolder = 'boxers';  
        $ProductNameForRoute = ucfirst($ImageFolder);
         
        return view('PurchaseNow', [
            'RelatedProducts' => $Products,  
            'MostPopular' => $MostPopular, 
            'Products' => $Products, 
            'ImageFolder' => $ImageFolder,  
            'ProductNameForRoute' => $ProductNameForRoute,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function edit(Boxer $boxer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boxer $boxer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boxer $boxer)
    {
        //
    }
}

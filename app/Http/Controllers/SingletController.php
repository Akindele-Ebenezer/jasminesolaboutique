<?php

namespace App\Http\Controllers;

use App\Models\Singlet;
use Illuminate\Http\Request;

class SingletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'singlets';
        $Products = Singlet::all(); 
        $ImageFolder = $page_title;
        $ProductName = ucfirst($ImageFolder);
        $ProductNameForRoute = ucfirst($ImageFolder);
        $PageTitleBg = $page_title . '-bg.jpg';
        
        return view('Singlets', [
            'PageTitleBg' => $PageTitleBg,
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
     * @param  \App\Models\Singlet  $singlet
     * @return \Illuminate\Http\Response
     */
    public function show($ProductId)
    {
        $Products = Singlet::all(); 
        $ImageFolder = 'singlets';  
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
     * @param  \App\Models\Singlet  $singlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Singlet $singlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Singlet  $singlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singlet $singlet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Singlet  $singlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singlet $singlet)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $Products = Perfume::all(); 
        $ImageFolder = 'perfumes';
        $ProductNameForRoute = ucfirst($ImageFolder);
        return view('Perfumes', [
            'Products' => $Products,
            'MostPopular' => $Products, 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ProductId)
    { 
        $PerfumeDetails = Perfume::find($ProductId);
        $Products = Perfume::all(); 
        $page_title = $PerfumeDetails->Name;
        $ImageFolder = 'perfumes';
        $ProductNameForRoute = ucfirst($ImageFolder);
 
        return view('PurchaseNow', [
            'page_title' => $page_title,
            'PerfumeDetails' => $PerfumeDetails, 
            'MostPopular' => $Products, 
            'RelatedProducts' => $Products, 
            'Products' => $Products, 
            'ImageFolder' => $ImageFolder, 
            'ProductNameForRoute' => $ProductNameForRoute, 
        ]); 
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

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
        $page_title = 'perfumes';
        $Products = Perfume::inRandomOrder()->get(); 
        $MostPopular = Perfume::inRandomOrder()->get();
        $ImageFolder = $page_title;
        $ProductName = ucfirst($ImageFolder);
        $ProductNameForRoute = ucfirst($ImageFolder);
        $PageTitleBg = $page_title . '-bg.jpg';
 
        return view('Perfumes', [
            'PageTitleBg' => $PageTitleBg,
            'page_title' => ucwords($page_title),
            'ImageFolder' => $ImageFolder,
            'ProductName' => $ProductName,
            'Products' => $Products,
            'MostPopular' => $MostPopular, 
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
        $Products = Perfume::inRandomOrder()->get();
        $MostPopular = Perfume::inRandomOrder()->get();
        $ImageFolder = 'perfumes';
        $ProductNameForRoute = ucfirst($ImageFolder);

        return view('PurchaseNow', [
            'MostPopular' => $MostPopular, 
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

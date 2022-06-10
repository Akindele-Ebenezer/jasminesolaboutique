<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Bag::all(); 
        return view('Bags', [
            'Products' => $Products,
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
        $BagDetails = Bag::find($ProductId);
        $Products = Bag::all(); 
        $page_title = $BagDetails->Name;
        $ImageFolder = 'bags';  
        
        return view('PurchaseNow', [
            'page_title' => $page_title,
            'BagDetails' => $BagDetails, 
            'Products' => $Products, 
            'ImageFolder' => $ImageFolder,  
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

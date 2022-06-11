<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Perfume;

class IndexController extends Controller
{
    public function index()
    {  
        $page_title = 'SHOP';

        $Perfumes = Perfume::all(); 
        $ImageFolder = 'perfumes';
        $ProductNameForRoute = ucfirst($ImageFolder);

        return view('home', [
            'page_title' => $page_title,
            'Perfumes' => $Perfumes,
            'ProductNameForRoute' => $ProductNameForRoute, 
        ]);  
    } 
    
    public function show($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Perfume;
use App\Models\Singlet;
use App\Models\Boxer;

class IndexController extends Controller
{
    public function index()
    {  
        $page_title = 'SHOP';

        $Bags = Bag::all();
        $Perfumes = Perfume::all(); 
        $Singlets = Singlet::all(); 
        $Boxers = Boxer::all(); 
        $ImageFolder = 'perfumes'; 
        $ProductNameForRoute = ucfirst($ImageFolder);
        $ProductNameForRoute_2 = 'Bags';
        $ProductNameForRoute_3 = 'Singlets';
        $ProductNameForRoute_4 = 'Boxers';

        return view('home', [
            'page_title' => $page_title,
            'Bags' => $Bags,
            'Perfumes' => $Perfumes,
            'Singlets' => $Singlets,
            'Boxers' => $Boxers,
            'ProductNameForRoute' => $ProductNameForRoute,
            'ProductNameForRoute_2' => $ProductNameForRoute_2,
            'ProductNameForRoute_3' => $ProductNameForRoute_3, 
            'ProductNameForRoute_4' => $ProductNameForRoute_4,   
        ]);  
    } 
    
    public function show($id)
    {
        //
    }
}

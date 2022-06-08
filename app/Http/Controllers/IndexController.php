<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class IndexController extends Controller
{
    public function index()
    {  
        $page_title = 'SHOP';

        $Perfumes = Perfume::all(); 

        return view('home', [
            'page_title' => $page_title,
            'Perfumes' => $Perfumes,
        ]);  
    } 
    
    public function show($id)
    {
        //
    }
}

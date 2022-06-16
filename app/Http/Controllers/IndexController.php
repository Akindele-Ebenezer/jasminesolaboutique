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

        $Bags = Bag::inRandomOrder()->get();
        $Perfumes = Perfume::inRandomOrder()->get(); 
        $Singlets = Singlet::inRandomOrder()->get(); 
        $Boxers = Boxer::inRandomOrder()->get(); 
        $ImageFolder = 'perfumes'; 
        $ProductNameForRoute = ucfirst($ImageFolder);
        $ProductNameForRoute_2 = 'Bags';
        $ProductNameForRoute_3 = 'Singlets';
        $ProductNameForRoute_4 = 'Boxers';
        $PurchasedProductName = '';
        $PurchasedProductPrice = '';
        $PurchasedProductId = '';
        $PurchasedProductType = '';

        if (isset($_GET['ProductName']) && isset($_GET['ProductPrice'])) {
            $PurchasedProductId = $_GET['ProductId'];
            $PurchasedProductType = $_GET['ProductType']; 
            $PurchasedProductName = $_GET['ProductName'];
            $PurchasedProductPrice = $_GET['ProductPrice']; 
        }

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
            'PurchasedProductName' => $PurchasedProductName, 
            'PurchasedProductPrice' => $PurchasedProductPrice,  
            'PurchasedProductId' => $PurchasedProductId, 
            'PurchasedProductType' => $PurchasedProductType, 
        ]);  
    } 
    
    public function shop()
    {
        $page_title = 'shop';
        $Perfumes = Perfume::inRandomOrder()->get(); 
        $Bags = Bag::inRandomOrder()->get();
        $Singlets = Singlet::inRandomOrder()->get(); 
        $Boxers = Boxer::inRandomOrder()->get(); 
        $Boxers = Boxer::inRandomOrder()->get(); 
        $Singlets = Singlet::inRandomOrder()->get(); 
        $MostPopular = Perfume::inRandomOrder()->get();
        $ImageFolder = 'perfumes';
        $ProductName = ucfirst($ImageFolder);
        $ProductNameForRoute = ucfirst($ImageFolder);
        $ProductNameForRoute_2 = 'Bags';
        $ProductNameForRoute_3 = 'Singlets';
        $ProductNameForRoute_4 = 'Boxers';
        $PageTitleBg = 'hair-bg.jpg';
 
        return view('/Shop', [
            'PageTitleBg' => $PageTitleBg,
            'page_title' => ucwords($page_title),
            'ImageFolder' => $ImageFolder,
            'ProductName' => $ProductName,
            'Bags' => $Bags,
            'Perfumes' => $Perfumes,
            'Singlets' => $Singlets,
            'Boxers' => $Boxers,
            'MostPopular' => $MostPopular,  
            'ProductNameForRoute' => $ProductNameForRoute,
            'ProductNameForRoute_2' => $ProductNameForRoute_2,
            'ProductNameForRoute_3' => $ProductNameForRoute_3, 
            'ProductNameForRoute_4' => $ProductNameForRoute_4,  
        ]);  
    }
}

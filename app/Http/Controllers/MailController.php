<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller { 
   public function MessageSent(Request $Request) {  
      $data = [
        'PurchasedProductId'=> $Request->PurchasedProductId,
        'PurchasedProductType'=> $Request->PurchasedProductType,
        'PurchasedProductName'=> $Request->PurchasedProductName,
        'PurchasedProductPrice'=> $Request->PurchasedProductPrice,
        'Name'=> $Request->Name,
        'Email'=> $Request->Email,
        'PhoneNo'=> $Request->PhoneNo,
        'Location'=> $Request->Location,
        'Message'=> $Request->Message,
      ];

      Mail::send('mail', $data, function($message) {
         $message->to('info@ebenwebstudio.com', 'JASMINE Sola Boutique')->subject
            ('New PRODUCT Purchased from your Website'); 
      });

      return view('/PurchaseSuccess');
   } 
}
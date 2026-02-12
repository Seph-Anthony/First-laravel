<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function showStore(){
        
$storeName = "Tech Store";
$items = ['Laptop', 'Smartphone', 'Tablet'];

return view ('store', ['shopName'=>$storeName, 'items'=>$items]);

    }
}

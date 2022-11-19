<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
   public function add_shopinfo(){
        return view('shopowner.AddShopOwner');
   }
}

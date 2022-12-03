<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
   public function add_shopinfo(){
         $category = Category::all();
         $id = Auth::id();
         $user = user::all();

        return view('shopowner.AddShopOwner',compact('category','user'));
   }

   
}

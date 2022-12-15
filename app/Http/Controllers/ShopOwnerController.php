<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\userinfo;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
   public function add_shopinfo(){
         $category = Category::all();
         $userin = userinfo::all();
         $id = Auth::id();
         $user = user::all();

        return view('shopowner.AddShopOwner',compact('category','user','userin'));
   }

   // public function addShopinfo(Request $request)
   // {
   //       $data = request()->validate([
   //          'shop_name' => 'required',
   //          'shop_address' => 'required',
   //          'shop_phone' => 'required',
   //          'shop_email' => 'required',
   //          'shop_category' => 'required',
   //          'shop_image' => 'required',
   //          'shop_description' => 'required',
   //          'shop_owner' => 'required',
   //       ]);
   
   //       $shop = new Shop();
   //       $shop->shop_name = $data['shop_name'];
   //       $shop->shop_address = $data['shop_address'];
   //       $shop->shop_phone = $data['shop_phone'];
   //       $shop->shop_email = $data['shop_email'];
   //       $shop->shop_category = $data['shop_category'];
   //       $shop->shop_image = $data['shop_image'];
   //       $shop->shop_description = $data['shop_description'];
   //       $shop->shop_owner = $data['shop_owner'];
   //       $shop->save();
   
   //       return redirect()->route('shopowner.add_shopinfo');
   // }

   public function adduserinfo(Request $request)
   {
      $user = Auth::user();
      $userinfos = new userinfo();
      $userinfos->name = $request->shopname;
      $userinfos->address = $user->address;
      $userinfos->phone = $user->phone;
      $userinfos->emergency_contact =$request->ephone;
      $userinfos->email = $user->email;
      $userinfos->shop_category = $request->category;
      $userinfos->aboutshop = $request->about;
      $userinfos->user_id = $user->id;

     
      $image = $request->file;
      if ($image) {
         $image_name = time().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('images'),$image_name);
      $userinfos->image = $image_name;
     }
      
      $userinfos->save();
      return redirect()->back()->with('message','Shop Info Updated successfully');


   }
   
}

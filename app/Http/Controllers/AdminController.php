<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{

    //Show Customers
    public function showusers()
    {
        $data =  user::paginate(5);
        return view('admin.users',compact('data'));
    }
    public function delete_user($id)
    {
        $userdelete = user::find($id);
        $userdelete->delete();
        return redirect()->back()->with('message','User Deleted Successfully');
    }
    //Show Shop Owners
    public function shopowner()
    {
        $data = user::paginate(5);
        return view('admin.shopowner',compact('data'));
    }
    public function delete_shopowner($id)
    {
        $userdelete = user::find($id);
        $userdelete->delete();
        return redirect()->back()->with('message','Shop Owner Deleted Successfully');
    }

    //category show
    public function add_category()
    {
        $category = category::paginate(5);
        return view('admin.add_category', compact('category'));
    }
    //save category
    public function save_category(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);
        $category = new category();
        $category->category_name = $request->category;
        $category->save();
        return redirect()->back()->with('message','Category Added Successfully');
        
    }
    
}

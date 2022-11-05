<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
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
}

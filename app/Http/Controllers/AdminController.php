<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        
        return view('admin.users', compact('users'));
    }

    public function deleteuser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
        
    }

    public function foodmenu()
    {
        return view('admin.foodmenu');
    }

    public function upload(Request $request)
    {
        $users = new Food;

        $image = $request->image;

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage', $imageName);

        $users->image = $imageName;

        $users->title = $request->title;

        $users->description = $request->description;

        $users->price = $request->price;

        $users->save();

        return redirect()->back();
    }
}

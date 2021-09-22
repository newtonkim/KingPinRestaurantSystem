<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $users = Food::all();
        $chefs = Chef::all();
        return view('home', compact('users', 'chefs'));
    }

    public function redirects()
    {
        $users = Food::all();
        $chefs = Chef::all();
        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.adminhome');
        } 
        else
        {
            $user_id = Auth::id();
            $count = Cart::where('user_id',$user_id)->count();

            return view('home', compact('users', 'chefs', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        // Get the currently authenticated user's ID...
        if(Auth::id())
        {
            $user_id = Auth::id();

            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new Cart;

            $cart->user_id = $user_id;

            $cart->food_id = $foodid;

            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        } 
        else
        {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = Cart::where('user_id', $id)->count();

        $cartdatas = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        return view('showcart', compact('count', 'cartdatas'));
    }
}

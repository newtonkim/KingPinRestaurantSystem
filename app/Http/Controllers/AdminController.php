<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        
        return view('admin.users', compact('users'));
    }

    public function reservation(Request $request)
    {
        $users = new Reservation;

        $users->name = $request->name;

        $users->email = $request->email;

        $users->phone = $request->phone;

        $users->date = $request->date;

        $users->time = $request->time;

        $users->guests = $request->guests;

        $users->message = $request->message;

        $users->save();

        return redirect()->back();
        
    }

    public function deleteuser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
        
    }

    public function deletemenu($id)
    {
        $users = Food::find($id);
        $users->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $users = Food::find($id);

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

    public function updatemenu($id)
    {
        $users = Food::find($id);

        return view('admin.updatemenu', compact('users'));
    }

    public function foodmenu()
    {
        $users = Food::all();

        return view('admin.foodmenu', compact('users'));
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

    public function viewreservation()
    {
        $users = Reservation::all();
        
        return view('admin.adminreservation', compact('users'));
    }

    public function chef()
    {
        $users = Chef::all();
        
        return view('admin.adminchef', compact('users'));
    }

    public function uploadchef(Request $request)
    {
        $users = new Chef;

        $image = $request->image;

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('chefimage', $imageName);

        $users->image = $imageName;

        $users->name = $request->name;

        $users->speciality = $request->speciality;

        $users->save();

        return redirect()->back();
    }

    public function updatechef($id)
    {
        $users = Chef::find($id);

        return view('admin.updatechef', compact('users'));
    }
    
    public function updatefoodchef(Request $request, $id)
    {
        $users = Chef::find($id);

        $image = $request->image;

        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chefimage', $imageName);

            $users->image = $imageName;
        }

        $users->name = $request->name;

        $users->speciality = $request->speciality;

        $users->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $users = Chef::find($id);
        $users->delete();
        return redirect()->back();
    }
}

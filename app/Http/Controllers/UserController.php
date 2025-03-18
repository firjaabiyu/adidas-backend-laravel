<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::query()
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%' .$name. '%');
        })
        ->get()
        ;
        return view('pages.dashboard', compact('users'));
    }

    // public function destroy(User $user){
    //     $user->delete();
    //     return redirect()->route('user.index')->with('success', 'Item deleted successfully.');
    // }
}

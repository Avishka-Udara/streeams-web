<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class Userlist extends Controller
{
    //
    public function adminPage()
    {   
        $userlist = User::all();
        return view('admin.admin', compact('userlist'));
    }

    public function edit($id)
    {
        $userlist = User::findOrFail($id);
        return view('admin.adminEdit', compact('userlist'));
    }

    public function adminUpdate(Request $request, $id)
    {   
        
        $validUser = validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'user_type' => 'required|numeric|max:2',
        ]);

        if ($validUser->fails()) {
            return redirect()->back()->withErrors($validUser)->withInput();
        }

        $userlist = User::findOrFail($id);
        $userlist->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type
        ]);
        return redirect()->route('admin.admin')->with('success', 'User updated successfully');
    }

    public function adminDelete($id)
    {
        $userlist = User::findOrFail($id);
        $userlist->delete();
        return redirect()->route('admin.admin')->with('success', 'User deleted successfully');
    }
}

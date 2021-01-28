<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create()
    {
        //bagian heru buat nampilin view create
    }

    public function store(Request $request)
    {
        //bagian heru buat nyimpen data kiriman dari view vreate
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request)
    {
        $users = User::find(Auth::user()->id);

        if ($users){
            $validate = null;
            if(Auth::user()->email === $request['email']){
                $validate = $request->validate([
                    'name' => 'required|min:1',
                    'email' => 'required|email'
                ]);

            } else {
                $validate = $request->validate([
                    'name' => 'required|min:1',
                    'email' => 'required|email|unique:users'
                ]);   
            }

            if ($validate) { 
                $users->name = $request['name'];
                $users->email = $request['email'];

                $users->save();

                $request->session()->flash('Sukses', 'Profil Berhasil Di Update');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function passwordUpdate(Request $request){
        $validate = $request->validate([
            'oldPassword' => 'required|min:8',
            'password' => 'required|min:8|confirmed'
        ]);   

        $users = User::find(Auth::user()->id);

        if ($users){
            if (Hash::check($request['oldPassword'], $users->password) && $validate) {
                $users->password = Hash::make($request['password']);
                
                $users->save();

                $request->session()->flash('Sukses', 'Password Berhasil Di Update');
                return redirect()->back();
            } else {
                $request->session()->flash('Gagal', 'Password Gagal Di Update');
                return redirect()->back();
            }
        }
    }

    public function passwordEdit($id){
        $users = User::findOrFail($id);
        return view('user.password', compact('users'));
    }

    public function profil($id){
        $users = User::findOrFail($id);
        return view('user.profil', compact('users'));
    }
}

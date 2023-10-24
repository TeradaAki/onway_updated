<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        return view("auth.login");
    }

    public function logout() {
        return view("auth.login");
    }

    public function loginAdmin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('loginId', $admin->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Incorrect Password')->withInput();
            }
        } else {
            return back()->with('fail', 'This account is not registered')->withInput();
        }
    }
    
}

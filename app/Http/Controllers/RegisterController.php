<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Add this use statement

class RegisterController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function registerAdmin(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin',
            'password' => 'required|min:5|max:12'
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $res = $admin->save();
        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    // public function testDatabaseConnection()
    // {
    //     try {
    //         DB::connection()->getPdo();
    //         return "Database connection is working.";
    //     } catch (\Exception $e) {
    //         return "Database connection error: " . $e->getMessage();
    //     }
    // }
}

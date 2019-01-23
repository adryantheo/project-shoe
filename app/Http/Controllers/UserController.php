<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

//Controller untuk User

class UserController extends Controller
{
    //Fungsi untuk Menampilkan Semua Data User
    public function index()
    {
        return response()->json(User::with(['orders'])->get());
    }

    //Fungsi untuk Login
    public function login(Request $request)
    {
        $status = 401;
        $response = ['error' => 'Unauthorised'];

        if (Auth::attempt($request->only(['email', 'password']))) {
            $status = 200;
            $response = [
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('bigStore')->accessToken,
            ];
        }

        return response()->json($response, $status);
    }

    //Fungsi untuk Register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'c_password' => 'required|same:password',
            'address' => 'required|max:50',
            'telp' => 'required|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->is_admin = 0;

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('bigStore')->accessToken,
        ]);
    }

    //Fungsi untuk Menampilkan Data User Tertentu
    public function show(User $user)
    {
        return response()->json($user);
    }

    //Fungsi untuk Menampilkan Orderan dari User Tertentu
    public function showOrders(User $user)
    {
        return response()->json($user->orders()->with(['product'])->get());
    }

}
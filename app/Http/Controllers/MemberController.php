<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function card()
    {
        // dd(Auth::user());
        $user = Auth::user();
        return view("member/card", [
            'user' => $user
        ]);
    }

    public function list()
    {
        // $users = User::all();
        $users = DB::table("users")->get();
        // dd($users);
        return view("member/list", [
            'users' => $users
        ]);
    }
}

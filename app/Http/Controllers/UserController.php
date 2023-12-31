<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;






























class UserController extends Controller
{
    public function searchView(){
        return view('search');
    }

    public function search($term) {
        $data = User::where('name', 'like', "$term%")->get();
        return ($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {

        $id = 1;
        $user = User::find($id);
        $pictures = $user->pictures;

        return $user;
        //return User::orderBy('id', 'DESC')->get();
    }

   
}

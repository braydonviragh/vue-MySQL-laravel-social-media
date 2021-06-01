<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\DB;

class PictureController extends Controller
{
    //
    public function list() 
    { 
        $data =  Picture::
        select( 'pictures.title', 'pictures.img', 'pictures.description', 'pictures.date', 'pictures.featured')
        ->join('users', 'pictures.user_id', 'users.id')
        ->get();
        return $data;
     
        
    }
}

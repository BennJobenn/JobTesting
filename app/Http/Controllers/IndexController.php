<?php

namespace App\Http\Controllers;

use App\Models\Lrvluser;

class IndexController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function firstpage()
    {
        $name = Lrvluser::all();

        $user = request('user');

        return view('firstpage', ['name' =>  $name, 'user' => $user]);
    }

    public function secondpage($id)
    {

        $id = Lrvluser::find($id);
        return view('secondpage', ['id' => $id]);
    }
}
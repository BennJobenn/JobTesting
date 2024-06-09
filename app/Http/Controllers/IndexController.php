<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function firstpage()
    {
        $name = [
            ['id' => 1, 'names' => 'John Doe','email' => 'johndoe@gmail.com', 'age' => 24],
            ['id' => 2, 'names' => 'John Does','email' => 'johndoes@gmail.com', 'age' => 25],
            ['id' => 3, 'names' => 'John Doess','email' => 'johndoess@gmail.com', 'age' => 26],
            ['id' => 4, 'names' => 'John Doesss','email' => 'johndoesss@gmail.com', 'age' => 27]
        ];

        $user = request('user');

        return view('firstpage', ['name' =>  $name, 'user' => $user]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class About extends Controller
{
    public function index(){

        $userModel = new User();
        $userModel->name = 'John Wick Third';
        $userModel->email = 'john88@gmail.com';
        $userModel->password = 'john123$';
        $userModel->save();
        dd('');
        $users = User::all();
        dd($users[0]->created_at);
        $data['array'] = [0,12,3,4,5];
        $data['name'] = 'johns';
        return view('home/home',$data);
        // if(view::exists('xyz')){
        //     echo 'exist';
        // }
        // else{
        //     echo 'not..';
        // }
        // return view('home/home')
        // ->with('array',[0,12,3,4,5])
        // ->with('name','johns');
    }
}

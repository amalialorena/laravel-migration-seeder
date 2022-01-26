<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $nav=['menu1', 'menu2', 'menu3'];
    public function index(){
     
        return view('home', ['nav'=>$this->nav]);
    }
    public function test() {
        $data=['nav'=>$this->nav];
        return view('test', $data);
    }
}

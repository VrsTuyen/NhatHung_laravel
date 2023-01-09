<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $data;

    function __construct(){
        
    }

    function index(){
        $this -> data['title'] = 'Home';
        
        return view('client/home', $this -> data);
    }
}

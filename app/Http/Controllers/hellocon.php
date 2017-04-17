<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class hellocon extends Controller
{
    //

    public function index(){

$data=[


    'first_name'=>"nimit",
    'lastname'=>"pamnani",

    'Hobbies'=>"photograhy",

    ];

        return view('index',$data);

    }
}




?>
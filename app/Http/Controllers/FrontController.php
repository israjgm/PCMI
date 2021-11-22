<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Juego;
use App\Test;


class FrontController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function contacto(){
        return view('contacto');
    }

    public function reviews(){
        $videos = Video::Videos();
        return view('reviews',compact('videos'));
    }
    public function jugar(){
        $juegos = Juego::Juegos();
        return view('jugar',compact('juegos'));
    }
    public function contestar(){
        $tests = Test::tests();
        return view('contestar',compact('tests'));
    }
    public function admin(){
        return view('admin.index');
   }
}

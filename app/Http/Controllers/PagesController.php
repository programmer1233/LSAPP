<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
      $title = 'Welcome to Laravel Page';
      return view('pages.index')->with('title', $title);
    }
    public function about(){
      $title = 'About';
      return view('pages.about')->with('title', $title);
    }
    public function services(){
      $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Laravel Engine', 'Blade Template', 'Node JS', 'C++']
      );
      return view('pages.services')->with($data);
    }
}

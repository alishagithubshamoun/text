<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class homeController extends Controller
{
    public function create(){
        return view ('/home_create');
    }
    
    public function store(){
        Home::create([

            'title' => request()->input('title'),
            'description' => request()->input('description'),
        ]);
        return redirect()->to('/home');
    }

    // function
    public function index(){

        $data['home'] =  Home::get();
        return view('home_view',$data);
    }

    public function edit($id){
        // return $id;
        return Home::find($id);
    }
}
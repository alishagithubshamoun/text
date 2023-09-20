<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;

class aboutcontroller extends Controller
{
    public function create(){
        return view('about_create');
    }
    
    public function index()
    {
        $data['about'] =  About::get();
        return view('about_view',$data);
    }

    public function store(Request $request){
        About::create([

            'hi'  =>  $request->hi,
            'how' => request()->input('how'),
        ]);
        return redirect()->to('about')->with('success', 'create in successfully');
    }
    // Function controller

    public function edit($id){
        // return $id;
       $data['about'] = About::find($id);
       return view('about_edit', $data);
    }

    public function update($id,Request $request){

        $this->validate($request,[

            'hi' => 'required',
            'how' => 'required'
    
            ]);
        $about = About::find($id);
        $about->update([
            'hi'  => request()->input('hi'),
            'how' => request()->input('how'),

        ]);
        return redirect('about')->with('success', 'about updated successfully');
    }
    public function delete($id){
        $about = About::find($id);
        $about->delete();
        return redirect()->to('about')->with('success', 'delete successfully');
    }
}
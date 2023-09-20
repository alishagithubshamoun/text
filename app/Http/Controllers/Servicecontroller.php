<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class servicecontroller extends Controller
{
    public function create(){
        return view('service_create');
    }
    
    public function store(){
        // return request()->all();
        Service::create([

            'test'  => request()->input('test'),
            'essay' => request()->input('essay'),
        ]);
        return redirect()->to('/service');
    }

    // function
    public function index(){

        $data['service'] =  Service::get();
        return view('service_view',$data);
    }

    public function edit($id){
        // return $id;
        $data['service'] = Service::find($id);
        return view('service_edit',$data);   
    }

    public function update($id){
        $service = Service::find($id);
        $service->update([
            'test'  => request()->input('test'),
            'essay' => request()->input('essay'),
        ]);
        return redirect()->to('service');
    }
}


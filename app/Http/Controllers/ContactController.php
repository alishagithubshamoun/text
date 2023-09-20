<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class contactcontroller extends Controller
{    
    public function create(){
        return view('contact_create');
    }
   
   
    // Function controller
   
    public function index()
    {
        $data['contact'] =  Contact::get();
        return view('contact_view',$data);
    }

    public function store(Request $request)
    {
        Contact::create([
            'email' => $request->email,
            'phone' => request()->input('phone'),
        ]);
        return redirect()->to('contact')->with('success', 'create in successfully');
    }
   
    public function edit($id)
    {
        // return $id;
        $data['contact'] = Contact::find($id);
        return view('contact_edit', $data);
    }

    public function update($id,Request $request)
    {
    
        $this->validate($request,[

        'email' => 'required',
        'phone' => 'required'

        ]);

        $contact = Contact::find($id);
        $contact->update([
            'email' => request()->input('email'),
            'phone' => request()->input('phone'),
        ]);

        return redirect('contact')->with('success', 'contact updated successfully');    
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return  redirect()->to('contact')->with('success', 'delete successfully');
    }
}
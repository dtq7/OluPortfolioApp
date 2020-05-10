<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Education;
use App\Experience;
use App\Portfolio;
use App\contact;

use App\Mail\ContactCreated;


class PagesController extends Controller

{
    public function __construct()
{
    $this->middleware('auth')->except('index');
}

    // INDEX PAGE
    public function index(){
        $abouts = About::all();
        $educations = Education::orderBy('created_at', 'desc')->get(); 
        $experiences = Experience::orderBy('created_at', 'asc')->get();
        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
        
        return view('pages.index', compact('abouts', 'educations', 'experiences', 'portfolios'));
    }


    public function ContactInfo(){
        $contacts = contact::all();
    
        return view('pages.Guest.Contact.contactinfo', compact('contacts'));
    }
    public function StoreContact(contact $contact){
    
        $contact_attributes = request()->validate([
            'name' =>'required', 
            'email' => 'required', 
            'subject' => 'required', 
            'message' => 'required'
            ]);
    
        contact::create($contact_attributes);
    
        \Mail::to('mrolubanty@gmail.com')->send(
            new ContactCreated($contact)
        );
    
    
        return redirect('/');  
    }

 




    

    
}

<?php

namespace App\Http\Controllers\Admin;
use Brian2694\Toastr\Facades\Toastr;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //

    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function  show($id){

        $contact = Contact::find($id);
        return view('admin.contact.details',compact('contact'));

    }
    public function  delete($id){
        $contact = Contact::find($id);

        $contact->delete();

        Toastr::success('Contact delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/contact');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->password = $req->input('password');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Message was added');
    }

    public function allData(){
        // $contact = new Contact();
        // dd($contact->all());

        $contacts = Contact::all();
        return view('messages', ['data' => $contacts]);
    }

    public function findById($id){
        $contacts = new Contact;

        return view('oneMessage', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id){
        $contacts = new Contact;

        return view('updateMessage', ['message' => $contacts->find($id)]);
    }

    public function updateMessagePost($id, ContactRequest $req){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->password = $req->input('password');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Message was updated');
    }

    public function deleteMessage($id){
        $contacts = Contact::find($id)->delete();

        return view('messages', ['data' => Contact::all()]);
    }
}

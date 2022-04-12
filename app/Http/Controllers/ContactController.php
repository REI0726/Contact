<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request){
        $this->validate($request, Contact::$rules);
        $Contact = new Contact;
        $form = $request->all();
        return view('create',[
            'items'=>$form,
        ]);
    }
    public function submit(Request $request){
        $this->validate($request, Contact::$rules);
        $Contact = Contact::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $Contact->fill($form)->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('index', ['item' => $items]);
    }

    public function create(Request $request){
        $this->validate($request, Contact::$rules);
        $Contact = new Contact;
        $form = $request->all();
        return view('create',['item'=>$form]);
    }

    public function submit(Request $request){
//            $this->validate($request, Contact::$rules);

//         $Contact = Contact::find($request->id);
        $Contact = new Contact;
        $form = $request->all();
        unset($form['_token_']);
        $Contact->fill($form)->save();
        return redirect(route('contact.thanks'));
    }

    public function thanks(Request $request){
        return view('thanks');
    }
}

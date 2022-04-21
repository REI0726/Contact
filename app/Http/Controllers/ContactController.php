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
        return view('index', ['items' => $items]);
    }
    public function create(Request $request){
        $this->validate($request, Contact::$rules);
        $Contact = new Contact;
        $form = $request->all();
        return view('create',[
            'item'=>$form,
        ]);
    }
    public function submit(Request $request){
//             Log::debug('ログサンプル', ['memo' => 'sample1']);
//         $this->validate($request, Contact::$rules);
        $Contact = Contact::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
//         $Contact->fill($form)->save();
//         return redirect(route('contact.thanks'));
        return redirect('/');
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }
}

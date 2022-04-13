<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;


class ManagementController extends Controller
{
    public function index(Request $request){
        $items = Management::all();
        return view('management.index', ['items'=>$items]);
    }
    public function add(Request $request){
        return view('management.add');
    }
    public function create(Request $request){
        $this->validate($request, Management::$rules);
        $form = $request->all();
        Management::create($form);
        return redirect('/management');
    }
}

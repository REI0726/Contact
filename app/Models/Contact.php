<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;

    protected $guarded =array('id');
   

    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:0|max:150',
        'nationality' => 'required',
        'content' => 'required',
    );
}

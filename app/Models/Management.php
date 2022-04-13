<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'contact_id' => 'required',
        'age'=>'required',
        'nationality'=>'required',
        'comment' => 'required',
        
    );
    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->age. ':' . $this->nationality. ':' . $this->comment;
    }
}

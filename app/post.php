<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
    //protected $table='posts';
    //Primary Key
    //public $primaryKey='id';
    //TimeStamps
    //public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
        
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}





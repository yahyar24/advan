<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{

   
    protected $fillable = [
        'first_name', 'last_name', 'image','category_id'
       ];

       public function getFeaturedAttribute($image){
        return asset($image);
    }

       public function category(){
        return $this->belongsTo('App\Category');
    }

}

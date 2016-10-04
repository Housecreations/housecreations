<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Flash\Flash;


class Portafolio extends Model
{
     protected $table = "portafolios";
    
    protected $fillable = ['name', 'url', 'image_url', 'description', 'category'];

 public static function savePortafolio($request){
        
        
        if($request->file('image')){
            
            $file = $request->file('image');
            $name = 'housecreations_' .time(). "." . $file->getClientOriginalExtension();
            $path = 'images/portafolio/';
            $file->move($path, $name);
        
        }
        
        $portafolio = new Portafolio($request->all());
        $portafolio->image_url = $name; 
        $portafolio->save();
        
        return Flash::success("Página agregada");
        
        
    }

}

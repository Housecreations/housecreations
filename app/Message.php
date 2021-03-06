<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    
    protected $fillable = ['id', 'name', 'email', 'subject', 'body', 'read'];
    
    public static function unreadMessages(){
        
        return Message::where('read', '=', 'no')->count();
        
    }
    
}

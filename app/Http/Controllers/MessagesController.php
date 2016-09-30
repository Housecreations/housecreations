<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;
use App\Category;
use Laracasts\Flash\Flash;
use Mail;
use GuzzleHttp\Client;

class MessagesController extends Controller
{
     public function store(Request $request)
    {   
         
         
        
        
        
        $token = $request->input("g-recaptcha-response");
        
        if($token){
            
            $client = new Client();
           
          
            
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                'secret' => '6LdOQAcUAAAAADFQ350NWoZrJ7ihuDnX9LGHv9gQ',
                'response' => $token
                ]
            ]);
           
            
            $result = json_decode($response->getBody()->getContents());
             
            if($result->success){
                
                 $message = new Message($request->all());
        
         $message->save();
        
         $data = $request->all();
        
    
        
 
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       Mail::send('emails.message', $data, function($messagee) use ($request)
       {
           //remitente
           $messagee->from($request->email, $request->name);
 
           //asunto
           $messagee->subject($request->subject);
 
           //receptor
           $messagee->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
 
       });
        
        
         Flash::success("Mensaje enviado");
        
         return back();
                
                
            }else{
               Flash::success("No se pudo verificar el captcha");
            return back(); 
            }
            
        }else
        {
            Flash::success("No se pudo verificar el captcha");
            return back();
        }
        
        
       
  
    }
}

@extends('layouts.app')

@section('title', "Mensajes") 


@section('content') 
 @include('layouts.partials.nav-other')
 
 <div class="slide background">
    <div class="container">
     <div class="card col-md-12">
        <div class="row">
         <h3>Mensaje</h3>
         <hr>
         </div>
           <div class="row">
            <div class="col-md-12">
             <a href="{{url('/admin/messages')}}" class="button button-sm">Volver</a>
         </div>
         </div>
         <hr>
         
         <div class="row">
             
             <div class="col-md-12 text-left">
                 
                 
                 <div class="col-md-4 col-sm-4 col-xs-4"><h4>Asunto: {{$message->subject}}</h4></div> <div class="col-md-8 col-sm-8 col-xs-8 text-right"><h4>Fecha: {{$message->created_at}}</h4></div>
                 <br><hr>
                 <div class="col-md-12"><h4>De: {{$message->name}} &lt;{{$message->email}}&gt;</h4></div>
                 <br><hr>
                 <div class="col-md-12">
                    <h4>Mensaje</h4>

                    <div class="body-message">
                        {{$message->body}}
                    </div>
                 </div>
                 
             </div>
             
         </div>
         
        
     </div>
     </div>
 </div>
 
@endsection
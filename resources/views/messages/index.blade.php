@extends('layouts.app')

@section('title', "Mensajes") 


@section('content') 
 @include('layouts.partials.nav-other')
 
 <div class="slide background">
    <div class="container">
     <div class="card col-md-12">
        <div class="row">
         <h3>Mensajes</h3>
         <hr>
         </div>
           <div class="row">
            <div class="col-md-12">
             <a href="{{url('/admin')}}" class="button button-sm">Volver</a>
         </div>
         </div>
         <hr>
         
         <div class="row">
             
             @if(sizeof($messages) == 0)

<h4 class='text-center'>No hay mensajes para mostrar</h4>

@else
<div class="col-md-12">
<table class='table text-left'>
   <thead>
    <th>Correo</th>
    <th>Asunto</th>
    <th>Fecha</th>
    <th>Acciones</th>
</thead>
<tbody>
@foreach($messages as $message)



@if($message->read == 'no')
<tr class="unread">
@else

<tr>
@endif



<td>{{$message->email}}</td>
<td>{{$message->subject}}</td>
<td>{{$message->created_at}}</td>
<!-- return confirm('Seguro que deseas eliminarlo?');-->


<td>
                                   
                                   {!! Form::open(['url'=> '/admin/messages/'.$message->id, 'method' => 'DELETE', 'style' => 'display:block;', 'id' => 'messages_form_'.$message->id]) !!}
                                       <input type="hidden" name="message_id" value="{{$message->id}}">
                                       <input onclick="return confirm('Seguro que deseas eliminarlo?')" class="button button-lg"type="submit" value="Eliminar">
      
                                    {!! Form::close() !!}</td>

    </div>

</tr>




@endforeach
</tbody>
</table>
</div>
@endif
             
         </div>
         
        
     </div>
     </div>
 </div>
 
@endsection


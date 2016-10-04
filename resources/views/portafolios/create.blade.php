@extends('layouts.app')

@section('title', "Agregar al portafolio") 


@section('content') 
 @include('layouts.partials.nav')
 
 <div class="slide background">
    <div class="container">
     <div class="card col-md-12">
        <div class="row">
         <h3>Agregar página al portafolio</h3>
         <hr>
         </div>
          <div class="row">
              
              <a href="{{url('/admin')}}" class="button button-sm">Atrás</a>
              <hr>
              
          </div>
           <div class="row">
            <div class="col-md-12">
             
             {!! Form::open(['route' => 'portafolios.store', 'method' => 'POST', 'files' => true]) !!}
<div class="form-group">

{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la página']) !!}
</div>

<div class="form-group">

{!! Form::text('category', null, ['class' => 'form-control', 'required', 'placeholder' => 'Categoría de la página']) !!}
</div>

<div class="form-group">

{!! Form::text('url', null, ['class' => 'form-control', 'required', 'placeholder' => 'url de la página']) !!}
</div>

<div class="form-group">

{!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '20x5', 'required', 'placeholder' => 'Descripción de la página']) !!}
</div>



<div class="form-group">
    {!! Form::label('image', 'Imagen de la página') !!}
    {!! Form::file('image') !!}
    
</div>


<div class="form-group text-center">
    
    {!! Form::submit('Agregar página', ['class' => 'button button-md'])!!}
    
</div>

{!! Form::close() !!}
             
         </div>
         </div>
         <hr>
        
     </div>
     </div>
 </div>
 
@endsection
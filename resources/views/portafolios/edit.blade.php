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
             
             {!! Form::open(['route' => ['portafolios.update', $portafolio->id], 'method' => 'PUT', 'files' => true]) !!}

<div class="form-group">
    
   {!! Form::label('name', 'Nombre de la página') !!}
   {!! Form::text('name', $portafolio->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la página', 'required']) !!}
    
</div>
    
    
    <div class="form-group">
    
   {!! Form::label('category', 'Categoria') !!}
   {!! Form::text('category', $portafolio->category, ['class' => 'form-control', 'placeholder' => 'Categoria', 'required']) !!}
    
</div>  
     <div class="form-group">
    
   {!! Form::label('url', 'Url de la página') !!}
   {!! Form::text('url', $portafolio->url, ['class' => 'form-control', 'placeholder' => 'Categoria de la página', 'required']) !!}
    
</div> 
    <div class="form-group">
    
   {!! Form::label('description', 'Descripción') !!}
   {!! Form::textarea('description', $portafolio->description, ['class' => 'form-control', 'placeholder' => 'Descripción de la páginas', 'required']) !!}
    
</div> 
    

<div class="form-group">
    
   <div class="col-md-12">
       
       <img class="image-edit-portafolio" src="/images/portafolio/{{$portafolio->image_url}}" alt="">
       
   </div>
    
</div>  

<div class="form-group">
    {!! Form::label('image', 'Imagen de la página') !!}
    {!! Form::file('image') !!}
    
</div>



<div class="form-group">
    
    {!! Form::submit('Editar página', ['class' => 'button button-md'])!!}
    
</div>


{!! Form::close() !!}
             
         </div>
         </div>
         <hr>
        
     </div>
     </div>
 </div>
 
@endsection








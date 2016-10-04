@extends('layouts.app')

@section('title', "HouseCreations") 


@section('content') 
 @include('layouts.partials.nav-other')
 
 <div class="slide background">
    <div class="container">
     <div class="card col-md-12">
        <div class="row">
         <h3>Portafolio</h3>
         <hr>
         </div>
           <div class="row">
            <div class="col-md-12">
             <a href="{{route('portafolios.create')}}" class="button button-sm">Nueva página</a>
         </div>
         </div>
         <hr>
         
         <div class="row">
             
             <div class="col-md-12 portfolio-container">
                
                @foreach($portafolios as $portafolio)
                <div class="col-md-1"></div>
                <div class="items col-md-5">
                    <div class="actions">
                    
                        <a href="{{url('admin/portafolios/'.$portafolio->id.'/edit')}}"><i class="fa icon-wrench"></i></a>
                        
                         <a href="{{ url('admin/portafolios/'.$portafolio->id) }}" onclick="event.preventDefault();
                                document.getElementById('portafolios_form_{{$portafolio->id}}').submit();"><i class="fa icon-remove"></i></a>
                                   
                                   {!! Form::open(['url'=> '/admin/portafolios/'.$portafolio->id, 'method' => 'DELETE', 'style' => 'display:none;', 'id' => 'portafolios_form_'.$portafolio->id]) !!}
                                       
                                       <input type="submit">
      
                                    {!! Form::close() !!}
                        
                        
                    </div>
                    <h4>{{$portafolio->name}}</h4>
                    <div class="image">
                        <img src="/images/portafolio/{{$portafolio->image_url}}" alt="">
                    </div>
                    <h4><a href="http://{{$portafolio->url}}">{{$portafolio->url}}</a></h4>
                    <p>{{$portafolio->description}}</p>
                    <span class="category">{{$portafolio->category}}</span>
                </div>
                @endforeach
                
                <div class="text-center">
              {!! $portafolios->render() !!} 
                </div>
                
                
             </div>
             
         </div>
        
     </div>
     </div>
 </div>
 
@endsection
  <!-- navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
        <a href="#home" class="navbar-brand smoothScroll"><span class="font-thin">HouseCreation<span class="title-s">s</span> </span></a></div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/" class="smoothScroll">INICIO</a></li>
        
        
       
        
                        @if(Auth::user())
                                 <li>    
                                         @if($messagesCount > 0)
					            	    <li><a href="{{url('/admin/messages')}}">MENSAJES <span class="badge badge-color">{{$messagesCount}}</span></a></li>
					            	    @else
					            	    <li><a href="{{url('/admin/messages')}}">MENSAJES <span class="badge">{{$messagesCount}}</span></a></li>
					            	    @endif
					            		<li><a href="/admin">PANEL DE CONTROL</a></li>
					            		<li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        SALIR
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
					            		
					            	
					            </li>
                                
                                @else
                                 <li><a href="{{url('/login')}}">INICIAR SESIÓN</a></li>
                                @endif
        
        
      </ul>
    </div>
  </div>
</div>
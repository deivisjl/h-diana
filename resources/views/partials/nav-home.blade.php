<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
  
        <div class="container">
    
                <a class="navbar-brand" href="{{route('home')}}">  <i class="fa fa-spa"></i> Hierbalife </a>
    
                <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false" 
                        aria-label="{{ __('Toggle navigation') }}">
    
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a  class="nav-link {{setActive('mision')}}" href="{{route('mision')}}">Mision</a></li>
                            <li class="nav-item"><a  class="nav-link {{setActive('vision')}}" href="{{route('vision')}}">Vision</a></li>
                            <li class="nav-item"><a class="nav-link {{setActive('valores')}}" href="{{route('valores')}}">Valores</a></li>
                            <li class="nav-item"> <a  class=" nav-link {{setActive('login')}}"  href="{{route('login')}}">Login</a></li>
                        </ul>
                </div>
    </div>
    </nav> 
    

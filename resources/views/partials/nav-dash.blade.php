<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
  
    <div class="container">

            <a class="navbar-brand" href="{{route('home')}}"> <i class="fa fa-spa"></i>   Hierbalife </a>

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
                        
                       <li class="nav-item">
                        <div class="dropdown">
                                <a class="nav-link {{setActive('dash.asociado*')}} dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Mi Perfil
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{route('dash.asociado.index')}}"> <i class="fa fa-user"></i> Ver Mi Perfil </a>
                                  <a class="dropdown-item" href="{{route('dash.asociado.edit')}}"> <i class="fa fa-user-edit"></i> Editar Mi Perfil </a>
                                  
                                </div>
                              </div>
                            </li>

                        <li class="nav-item"><a class="nav-link {{setActive('dash.linea.index')}}" href="{{route('dash.linea.index')}}"> </i>Mi linea Desendiente</a></li>

                        {{-- <li class="nav-item"><a class="nav-link {{setActive('dash.cliente*')}}" href="{{route('dash.cliente.index')}}">Mis Clientes</a></li> --}}
                       
                        <div class="dropdown">
                                <a class="nav-link {{setActive('dash.cliente*')}} dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Mis Clientes
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{route('dash.cliente.index')}}"> <i class="fa fa-address-book"></i> Ver Mis Clientes </a>
                                  <a class="dropdown-item" href="{{route('dash.cliente.create')}}"> <i class="fa fa-user-plus"></i> Agregar Nuevo </a>
                                  
                                </div>
                              </div>




                        <li class="nav-item"><a class="nav-link {{setActive('dash.piramide.*')}}" href="{{route('dash.piramide.index')}}">Niveles</a></li>


                        <div class="dropdown">
                                <a class="nav-link {{setActive('dash.meta.*')}} dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Meta
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{route('dash.meta.index')}}"> <i class="fa fa-flag"></i> Ver Mi Meta </a>
                                  <a class="dropdown-item" href="{{route('dash.meta.saldo.index')}}"> <i class="fa fa-donate"></i> Ver Mi Saldo </a>
                                  
                                </div>
                              </div>

                             
                        
                       
                       

                        <li class="nav-item">
                          <div class="dropdown">
                                  <a class="nav-link {{setActive('dash.store*')}} dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Compras
                                  </a>
                                
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('dash.store.index')}}"> <i class="fa fa-newspaper"></i> Ver Catalogo  </a>
                                    <a class="dropdown-item" href="{{route('dash.store.car.index')}}"><i class="fa fa-shopping-cart"></i> Mi Carrito  </a>
                                    <a class="dropdown-item" href="{{route('dash.store.compra.index')}}"><i class="fa fa-shopping-basket"></i> Mis Compras  </a>
                                    
                                  </div>
                                </div>
                              </li>

                              <li class="nav-item">
                                  <div class="dropdown">
                                          <a class="nav-link {{setActive('dash.venta*')}} dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Ventas
                                          </a>
                                        
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{route('dash.venta.index')}}"><i class="fa fa-chart-line"></i> Mis Ventas </a>
                                            
                                            
                                          </div>
                                        </div>
                                      </li>
                       
                        <li class="nav-item">
                                <a href="#"   class=" nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> <i class="fa fa-door-open"></i> Cerrar Sesion</a>
                            </li>
                   
                        
                    </ul>
            </div>
</div>
</nav> 

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
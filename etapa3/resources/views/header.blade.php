<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST']?>/">
            <img src="{{URL::asset('/img/logo.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            Pitagoras'c
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST']?>/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://<?php echo $_SERVER['HTTP_HOST']?>/productos">Categorías</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="http://<?php echo $_SERVER['HTTP_HOST']?>/productos-todos">Ver todo</a>
                          </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST']?>/mayoristas">Mayorista</a>
                    </li>
                    <li class="nav-item">
                    <a href="#myModal" data-toggle="modal" data-target="#myModal" class="nav-link">Contacto</a>
                    </li>





                </ul>

                <ul class="navbar-nav ml-auto" style="display: flex">
                    <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" alt="">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                          <a class="dropdown-item" href="/cuenta">Mi cuenta</a>
                                        <a class="dropdown-item" href="/perfil_datos">Mis datos</a>

                                          @if (Auth::user()->isAdmin())
                                            <div class="dropdown-divider"></div>


                                            <a class="dropdown-item" href="/altaproducto">Alta productos</a>
                                            <a class="dropdown-item" href="/productos-borrar">Borrar productos</a>
                                            <a class="dropdown-item" href="/altacategoria">Alta categoría productos</a>
                                            <a class="dropdown-item" href="/altaprendas">Alta prendas</a>
                                            <a class="dropdown-item" href="/altatalles">Alta talles</a>
                                            <div class="dropdown-divider"></div>

                                          @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
        </div>
</nav>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido">
                </div>
                </div>
                <label for="consulta1"></label>
                <div class="form-label-group">
                <input type="Email" id="inputEmail" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                <label for="consulta1"></label>
                <textarea class="form-control" id="consulta1" rows="4" placeholder="Dejanos tu consulta aca"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <a href="http://<?php echo $_SERVER['HTTP_HOST']?>/gracias"> <button type="button" class="btn btn-primary">Enviar</button> </a>
            </div>
            </div>
        </div>
    </div>

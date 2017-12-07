<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <a class="navbar-brand" href="{{url('/')}}"><img src="../img/favicon.png" alt="">de Klink</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item @yield('activehome')"> <a class="nav-link" href="{{url('/')}}">Home </a> </li>
            <li class="nav-item  @yield('activeover')"> <a class="nav-link" href="{{url('over')}}">Over</a> </li>
            <li class="nav-item @yield('activegalerij')"> <a class="nav-link" href="{{url('galerij')}}">Galerij</a> </li>
            <li class="nav-item @yield('activecontact')"> <a class="nav-link" href="{{url('contact')}}">Contact</a> </li>
        </ul>
    </div>
</nav>

{{-- Nav topbar --}}
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"><strong>CRUD Laravel</strong></a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{url('/home')}}"><i class="material-icons left">home</i>Home</a></li>
            <li class="{{ request()->is('data') ? 'active' : '' }}"><a href="{{url('/data')}}"><i class="material-icons left">list</i>List Data</a></li>
        </ul>
    </div>
</nav>

{{-- Nav responsive --}}
<ul id="slide-out" class="sidenav">
    <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{url('/home')}}">Home</a></li>
    <li class="{{ request()->is('data') ? 'active' : '' }}"><a href="{{url('/data')}}">List Data</a></li>
</ul>

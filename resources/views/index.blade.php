@section('page','Home')
<!DOCTYPE html>
<html>
    <title>Console blogger @ @yield('page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('../resources/css/style.css') }}">
    <body>
    <div class="container-fluid">
        <div class="console">
            <ul class="console-list">
                <li><a class="red" href="/blog/public">[ console blog ] </a><a></a>@ @yield('page')</a></li>
                @auth
                <li>> Logged as: {{ Auth::user()->name }} </li>   
                <li>> Your role: 
                @switch(Auth::user()->type)
                    @case(0) User @break
                    @case(1) Mod @break
                    @case(2) Admin @break
                @endswitch
                </li>   
                
                <li>@if(Auth::user()->type == 1 || Auth::user()->type == 2) <a class="green" href="/blog/public/new">[ new post ] </a>@endif
                    @if(Auth::user()->type == 2) <a class="green" href="/blog/public/permissions">[ users ] </a>@endif
                    <a class="red" href="/blog/public/logout">[ logout ]</a></li>
                @endauth

                @guest
                <li><a class="green" href="/blog/public/login">[ login ] </a><a class="green" href="/blog/public/register">[ register ] </a></li>   
                @endguest
                @yield('content')
            </ul>
        </div>
    </div>
    </body>
</html>


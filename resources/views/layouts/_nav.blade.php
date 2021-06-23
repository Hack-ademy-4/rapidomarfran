<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand nav-b" href="{{ route('home') }}">Rapido.es</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcement.new') }}">Nuevo anuncio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)

                        <li><a class="dropdown-item"
                                href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                                {{$category->name}}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!--  <li class="dropdown-item mb-3">
                            <a href="">{{$category->name}}</a>
                        </li> -->
                        @endforeach
                    </ul>
                </li>
            </ul>
            @guest
            @if (Route::has('login'))
            <div class="mx-3">
                <a href="{{route('login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></a>
                <div>
                    <span>
                        Login
                    </span>
                </div>
            </div>
            @endif
            @if (Route::has('register'))
            <div class="mx-3">
                <a href="{{route('register')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="#fff" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg></a>
                <div>
                    <span>
                        Register
                    </span>
                </div>
            </div>
            @endif
            @else
            <div>
                <form id="logoutForm" action="{{route('logout')}}" method="POST">
                    @csrf
                </form>
                <a id="logoutBtn"
                    class=" nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                    href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000"
                        class="bi bi-person-x-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                    </svg></a>
                <div>
                    <span>
                        Logout
                    </span>
                </div>
            </div>
            @endguest

        </div>
    </div>
</nav>

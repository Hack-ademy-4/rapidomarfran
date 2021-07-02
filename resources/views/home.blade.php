@extends('layouts.app')
@section('content')


<!-- bienvenido -->


<div class="container  head headline mt-5 pt-5">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">{{__('ui.welcome')}}</h1>
            <p class="small mt-5 tx-muted">{{__('ui.slogan')}}</p>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-12">
            @if(session('announcement.create.success'))
            <div class="alert alert-success">{{session('announcement.create.success')}}</div>
            @endif
        </div>
    </div>
</div>

<div class="container mt-5 pt-5 headline">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <h2 class="tx-sec">{{__('ui.textSearch')}} 🤩</h2>
            <p class="mt-3 fw-bold">{{__('ui.products')}}</p>
        </div>
        <div class="col-12 col-md-6 text-center">
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div>
                            <a class="text-decoration-none tx-w fw-bold h5"
                                href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                                {{__("ui.{$category->name}")}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row my-5 py-5">
            <div class="col-12 text-center">
                <h2 class="tx-main mt-5 pt-5">Descubre mas sobre los ultimos anuncios</h2>
            </div>
            @foreach($announcements as $announcement)
            <div class="col-12 col-md-4 d-flex justify-content-center">

                <div class="card shadow text-center cardLayout my-5" style=" width: 18rem;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-2">
                                    <li class="mb-2 title">{{__('ui.title')}}:</li><p class="text-dark">{{$announcement->title}}</p>
                                    <li class="mb-2 title ">{{__('ui.price')}}:</li><p class="text-dark">{{$announcement->price}}$</p>
                                    <li class="mb-2 title">{{__('ui.description')}}:</li><p class="text-dark">{{$announcement->body}}</p>
                                    <li class="mb-2 title">{{__('ui.nameSeller')}}:</li><p class="text-dark">{{$announcement->user->name}}</p>
                                    <li class="mb-2 title">{{__('ui.dateAd')}}:</li><p class="text-dark">{{$announcement->created_at->format('d/m/Y')}}</p>
                                    <li class="mb-2 title">{{__('ui.category')}}:</li>
                                </ul>
                            <a class="text-decoration-none"
                                href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}} 
                            </a>
                        </p>
                        <a href="{{route('announcement.details', ['id'=>$announcement->id])}}"
                            class="btn btn-sm btn-outline-none title buttonOverlay">{{__('ui.read')}}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @push('scripts')

    <script>
        /*  Initialize Swiper  */

        var swiper = new Swiper(".mySwiper", {
            effect: "cube",
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

        /* log out */


        const logout = document.getElementById('logoutBtn');
        if (logout) {
            logout.addEventListener('click', (e) => {
                e.preventDefault();
                const form = document.getElementById('logoutForm').submit();
            });
        }

        /* scroll reveal */

        ScrollReveal().reveal('.headline', {
            duration: 750,
            delay: 400,
            distance: '80px',
            interval: 600,
            easing: 'cubic-bezier(0.3, 0, 0, 0.5)'
        });

    </script>
    @endpush
    @endsection

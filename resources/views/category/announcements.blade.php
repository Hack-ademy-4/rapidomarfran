@extends('layouts.app')
@section('content')

<div class="container my-5 py-5 title">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="tx-main">Descubre mas sobre los ultimos anuncios</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row title">
        <div class='col-12 text-center'>
            <h1>Tus categoria favoritas: {{$category->name}}</h1>
        </div>
    </div>
    @foreach($announcements as $announcement)
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card shadow p-3 mb-5 bg-body title text-center cardLayout my-5">
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
                <div class="card-footer text-capitalize d-flex justify-content-between">
                    <p>{{$announcement->body}}</p>
                    <i class="text-capitalize">{{$announcement->created_at->format('d/m/Y')}} -
                        {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-md-8 offset-md-2">{{ $announcements->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

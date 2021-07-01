@extends('layouts.app')
@section('content')
@if ($announcement)
<div class='container py-5 my-5'>
    <div class='row my-4'>
        <div class="col-12 text-center">
            <h1 class="display-3 fw-bolder title">Todos los artículos a la espera de ser revisados</h1>
            <p class="small mt-3 tx-muted">Empiece ahora con un simple clic</p>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        Anuncio #{{$announcement->id}}
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Usuario</h3>
                            </div>
                            <div class="col-md-7">
                                #{{$announcement->user->id}}
                                {{$announcement->user->name}}
                                {{$announcement->user->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Titulo</h3>
                            </div>
                            <div class="col-md-7">
                                {{$announcement->title}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Descripción</h3>
                            </div>
                            <div class="col-md-7">
                                {{$announcement->body}}
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-5">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                                </div>
                                @endforeach

                                <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{Storage::url($image->file)}}" class=" d-block w-100" alt="...">
                                </div>
                                @endforeach -->

                            
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Aceptar</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Rechazar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<!-- no hay anuncios para revisar -->
<div class="container my-5 py-5 head headline">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h3 class="text-center"> No hay mas anuncios para revisar </h3>
        </div>
    </div>
</div>
@endif
@endsection

@extends('layouts.app')
@section('content')
@if ($announcement)

<!-- <div class="container my-5 py-5 head headline">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">Todos los artículos a la espera de ser revisados</h1>
            <p class="small mt-5 tx-muted">Empiece ahora con un simple clic</p>
        </div>
    </div>
</div> -->

<div class='container py-5 my-5'>
    <div class='row my-4'>
        <div class="col-12 text-center">
            <h1 class="display-3 fw-bolder title">Todos los artículos a la espera de ser revisados</h1>
            <p class="small mt-3 tx-muted">Empiece ahora con un simple clic</p>
        </div>
        <div class="card">
            <div class="card-header">
                <!-- anuncio -->
                Anuncio #{{$announcement->id}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <!-- usuario -->
                        <h3>Usuario</h3>
                    </div>
                    <div class="col-md-9">
                        #{{$announcement->user->id}}
                        {{$announcement->user->name}}
                        {{$announcement->user->email}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <!-- titulo -->
                        <h3>Titulo</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->title}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <!-- description -->
                        <h3>Descripción</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->body}}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf

                <button type="submit" class="btn btn-success">Aceptar</button>
            </form>
        </div>
        <div class="col-md-12">

            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf

                <button type="submit" class="btn btn-danger">Rechazar</button>
            </form>
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

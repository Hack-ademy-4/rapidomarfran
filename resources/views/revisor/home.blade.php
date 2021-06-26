@extends('layouts.app')
@section('content')
@if ($announcement)

<div class="container my-5 py-5 head headline">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">Revisor home page</h1>
            <p class="small mt-5 tx-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quam
                deserunt, ab, iste nesciunt eos expedita fugit possimus esse officiis qui minima</p>
        </div>
    </div>
</div>

<div class='container'>
    <div class='row my-4'>
        <div class='col-12'>
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
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <!-- Rechazar -->
                <button type="submit" class="btn btn-danger">Rechazar</button>
            </form>
        </div>
        <div class="col-md-6 text-right">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <!-- Aceptar -->
                <button type="submit" class="btn btn-success">Aceptar</button>
            </form>
        </div>
    </div>
</div>
@else
<!-- no hay anuncios para revisar -->
<div class="container my-5 py-5 head headline">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h3 class="text-center"> No hay anuncios para revisar </h3>
        </div>
    </div>
</div>
@endif
@endsection

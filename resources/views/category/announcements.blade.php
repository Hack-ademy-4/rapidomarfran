@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5 title">
    <div class="row">
        <div class="col-12 text-center">
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="tx-main">Descubre mas sobre los ultimos anuncios</h2>
        </div>
    </div>
</div>



<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
            <!-- anuncios por categoria -->
            <h1>Anuncios por categoria: {{$category->name}}</h1>
        </div>
    </div>
    @foreach($announcements as $announcement)
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card shadow p-3 mb-5 bg-body title text-center cardLayout my-5">
                <div class="card-header text-center fs-3 text text-capitalize">
                    {{$announcement->title}}
                </div>
                <div class="car-body d-flex">
                    <img src="{{Storage::url($image->getUrl(300,150))}}" alt="">
                    <p>
                        {{$announcement->body}}
                    </p>
                </div>
                <div class="card-footer text-capitalize d-flex justify-content-between">
                    <!-- categoria -->
                <strong>Categoria: <a href="#">{{$announcement->category->name}}</a></strong>
               
                
                <i class="text-capitalize">{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
                    <strong>Categoria: <a href="#">{{$announcement->category->name}}</a></strong>
                    <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            {{ $announcements->links() }}
        </div>
    </div>

</div>
@endsection

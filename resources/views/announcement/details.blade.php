@extends('layouts.app')
@section('content')


<div class="container my-5 py-5 head">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h3 class="display-3 fw-bolder title">Tu anuncio favorito: {{$announcement->name}}</h3>
        </div>
    </div>
</div>


<div class="container my-5 py-5">
    <div class="row h-100 align-items-center justify-content-center mx-5">
        <iframe style="border:0; width: 50%; height: 600px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>

        <div class="col-12 col-md-6">
            <div class="card shadow title text-center cardLayout my-5" style=" width: 18rem;">
                <img src="https://picsum.photos/id/1/200/300" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->price}}$</p>
                    <p class="card-text">{{$announcement->body}}</p>
                    <p class="card-text">{{$announcement->created_at->format('d/m/Y')}}</p>
                    <p class="card-text">{{$announcement->user->name}}</p>
                </div>

            </div>
        </div>

    </div>
</div>


@endsection

@extends('layouts.app')
@section('content')

<div class="container my-5 py-5 title">
    <div class="row mt-3">
        <div class="col-12 text-center mt-3 title">
            <h1 class="fw-bolder title">Descubre mas sobre:{{$announcement->title}}</h1>
        </div>
    </div>
</div>
<div class="container my-3 py-3 title">
    <div class="row h-100 align-items-center justify-content-center mx-5">
        <div class="col-12 col-md-6"> 
            
            <div class="row mb-2">
                <div id="carouselExampleControls" class="carousel slide rounded shadow" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/150" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/150" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/150" class="d-block w-100 ruonded" alt="...">
                        </div>
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
            </div>
        </div>
        <div class="col-12 col-md-6 title">

        <h1 class="py-2">{{$announcement->title}}</h1>

            <div class="d-flex align-items-baseline">
                <i class="far fa-calendar-alt fa-2x m-4"></i>
                <p>Fecha de publicación: {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
            <h2>Descripción del producto.</h2>
            <p>{{$announcement->body}}</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi eveniet doloribus consequatur labor
                delectus quod quo in reiciendis temporibus facere, cum ratione dolores repellendus
                accusamus,necessitatibus nobis ad veniam nisi.</p>

            <p><strong class="fs-3">Precio:</strong>{{$announcement->price}}€</p>

            <p>Metodos de pago:</p>
            <i class="fab fa-cc-mastercard fa-2x m-4"></i>
            <i class="fab fa-cc-visa fa-2x m-4"></i>
            <i class="fab fa-cc-stripe fa-2x m-4"></i>
            <i class="fab fa-cc-paypal fa-2x m-4"></i>

            <div class="d-flex align-items-baseline">
                <i class="fas fa-truck fa-2x m-4"></i>
                <p>Envio gratuito a partir de 50€ de compra.</p>
            </div>
        </div>
    </div>
</div>
<div class="container title">
    <div class="row pt-3">
        <div class="col-12 col-md-6">
            <h3>Informacion del vendedor</h3>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-user fa-2x m-4 navIcon"></i>
                <p>Persona de contacto: {{$announcement->user->name}}</p>
            </div>

            <div class="d-flex align-items-baseline">
                <i class="fab fa-whatsapp fa-2x m-4"></i>
                <p>612345678</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-at fa-2x m-4 navIcon"></i>
                <p>{{$announcement->user->email}}</p>
            </div>

            <div class="d-flex align-items-baseline">
                <i class="fas fa-map-marker-alt fa-2x m-4 navIcon"></i>
                <p>Valencia</p>

            </div>
        </div>

        <div class="col-12 col-md-6">
        <h3>Haz clic en el mapa para saber a que distancia está el producto de ti.</h3>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.206458211149!2d-0.3409446497170537!3d39.46466432081207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60496b30eda62b%3A0x1e472836dd1fa977!2sValenciaBonita%20House!5e0!3m2!1ses!2ses!4v1624976721970!5m2!1ses!2ses"
                width="600" height="300" style="border:rounded;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>


</div>

</div>

@endsection


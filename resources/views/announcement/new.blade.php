@extends('layouts.app')
@section('content')

<div class="container my-5 py-5">
    <div class="row my-5 py-5">
        <div class="col-12 text-center">
            <h2 class="fw-bolder title">Agregar nuevo anuncio en Rapido</h2>
            <p class="small mt-3 tx-muted">La plataforma líder de compraventa de productos de segunda mano.</p>
        </div>

        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-6">
                <div class="card shadow border-0 p-3">
                    <div class="card-body">
                        <h4 class="tx-sec">Para Agregar compila el formulario 👇🏻</h4>
                        <form method="POST" action='{{route("announcement.create")}}'>
                            @csrf

                            <div class="card-header title">
                                Nuevo anuncio (Secret: {{$uniqueSecret}})
                            </div>

                            <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                            <!-- categorias -->
                            <div class="form-group py-3">
                                <label class="title fw-bold mb-2" for="categories">Categorias</label>
                                <select class="form-control mb-2" id="categories" name="category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <span class="invalid-feedback" role="alert"><strong>{{message}}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3 title">
                                <label for="announcementImages" class="form-label">Imagenes</label>
                                <div class="dropzone" id="drophere" ></div>
                                @error('images')
                                <small class="alert alert-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group py-3">
                                <!-- titulo -->
                                <label class="title fw-bold mb-2" for="announcementeName">Titulo</label>
                                <input type="text" class="form-control mb-2" id="announcementeName"
                                    aria-describedby="emailHelp" name="title" value="{{old("title")}}">
                                @error('title')
                                <small id="emailHelp" class="form-text" style="color:red;">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- anuncio -->
                                <label class="title fw-bold mb-2" for="announcementeBody py-3">Anuncio</label>
                                <textarea class="form-control mb-2" name="body" id="announcementeBody" cols="30"
                                    rows="10">{{old("body")}}</textarea>
                                @error('body')
                                <small id="emailHelp" class="form-text" style="color:red;">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group py-3">
                                <!-- precio -->
                                <label class="title fw-bold mb-2" for="announcementPrice">Precio</label>
                                <input type="number" step="0.01" class="form-control mb-2" id="announcementPrice"
                                    aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                                @error('price')
                                <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <!--  enviar   -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-outline-violet p-3">Agregar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection

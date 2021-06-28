@extends('layouts.app')
@section('content')


<!-- <div class="container my-5 py-5 head">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">Agregar un nuevo producto</h1>
            <p class="small mt-5 tx-muted">Gana dinero en Rapido simplemente vendiendo lo que no usas</p>
        </div>
    </div>
</div> -->


<div class="container my-5 py-5">
    <div class="row justify-content-center">
    <div class="col-12 text-center">
                <h1 class="display-3 fw-bolder title">Agregar nuevo anuncio en Rapido</h1>
                <p class="small mt-3 tx-muted">La plataforma líder de compraventa de productos de segunda mano.</p>
            </div>
            <div class="card">
                <!-- nuevo anuncio -->
                <div class="card-header">
                    Nuevo Anuncio
                </div>
                <div class="card-body">
                    <form method="POST" action='{{route("announcement.create")}}'>
                        @csrf
                        <!-- categorias -->
                        <div class="form-group py-3">
                            <label for="categories">Categorias</label>
                            <select class="form-control" id="categories" name="category">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert"><strong>{{message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <!-- titulo -->
                            <label for="announcementeName">Titulo</label>
                            <input type="text" class="form-control" id="announcementeName" aria-describedby="emailHelp"
                                name="title" value="{{old("title")}}">
                            @error('title')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- anuncio -->
                            <label for="announcementeBody py-3">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                                rows="10">{{old("body")}}</textarea>
                            @error('body')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <!-- precio -->
                            <label for="announcementPrice">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="announcementPrice"
                                aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                            @error('price')
                            <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <!--  enviar   -->
                        <button type="submit" class="btn btn-outline-violet py-3">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

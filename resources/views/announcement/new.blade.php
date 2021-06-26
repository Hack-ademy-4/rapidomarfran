@extends('layouts.app')
@section('content')


<div class="container my-5 py-5 head">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">Vendes lo que no usa en casa</h1>
            <p class="small mt-5 tx-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quam deserunt, ab, iste nesciunt eos expedita fugit possimus esse officiis qui minima</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- nuevo anuncio -->
                <div class="card-header">
                    Nuevo Anuncio
                </div>
                <div class="card-body">
                    <form method="POST" action='{{route("announcement.create")}}'>
                        @csrf
                        <!-- categorias -->
                        <div class="form-group">
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
                        <div class="form-group">
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
                            <label for="announcementeBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                                rows="10">{{old("body")}}</textarea>
                            @error('body')
                            <small id="emailHelp" class="form-text" style="color:red;">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- precio -->
                            <label for="announcementPrice">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="announcementPrice"
                                aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                            @error('price')
                            <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <!--  enviar   -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')  
@section('content') 

<div class="container my-5 py-5 head">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">Get started</h1>
            <p class="small mt-5 tx-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quam deserunt, ab, iste nesciunt eos expedita fugit possimus esse officiis qui minima</p>
        </div>
    </div>
</div>

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container">
      <div class="section-title">
        <!-- entrar en rapido -->
        <h2>Login en <span> Rapido.es</span></h2>
        <!-- rellena los campos con tu datos -->
        <p class=" text-center subtitulo"=>Rellena los campos con tu datos.</p>
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <form action="/login" method="POST" role="form" class="php-email-form">
        @csrf
        <div class="row">
          {{-- <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre anuncios" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div> --}}
          <div class="col-md-6 offset-md-3 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            <div class="validate"></div>
          </div>
          <div class="col-md-6 offset-md-3 form-group mt-3 mt-md-0">
            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
            <div class="validate"></div>
          </div>
          {{-- <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>--}}
          {{-- <div class="col-md-6 form-group">
            <input type="number" class="form-control" name="capacity" id="people" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>  --}}
        </div>
        {{-- <div class="form-group mt-3">
          <textarea class="form-control" name="description" rows="5" placeholder="Descripción"></textarea>
          <div class="validate"></div>
        </div> --}}
        <div class="mb-3">
          <!-- <div class="loading text-center">Loading</div> -->
          <div class="error-message"></div>
         <!--  <div class="sent-message text-center">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div> -->
        </div>
        <!-- entrar -->
        <div class="text-center"><button class="boton" type="submit">Entrar</button></div>
      </form>
    </div>
  </section><!-- End Book A Table Section -->
@endsection
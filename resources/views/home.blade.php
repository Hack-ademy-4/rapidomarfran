@extends('layouts.app')
@section('content')


<!-- bienvenido -->
<div class="container my-5 py-5 ">
    <div class="row">
        <div class="col-12">
            @if(session('announcement.create.success'))
            <div class="alert alert-success">{{session('announcement.create.success')}}</div>
            @endif
        </div>
    </div>
</div>


<div class="container my-5 py-5 head headline">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">{{__('ui.welcome')}}</h1>
            <p class="small mt-5 tx-muted">{{__('ui.slogan')}}</p>
        </div>
    </div>
</div>




<div class="container my-5 py-5 headline">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <h2 class="tx-sec">{{__('ui.textSearch')}} 🤩</h2>
            <p class="mt-3 fw-bold">{{__('ui.products')}}</p>
        </div>
        <div class="col-12 col-md-6 text-center">
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div>
                            <a class="text-decoration-none tx-w fw-bold h5" href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                                {{$category->name}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>   
    </div>
    
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="tx-main">Descubre mas sobre los ultimos anuncios</h2>
            </div>
            @foreach($announcements as $announcement)
            <div class="col-12 col-md-4 d-flex justify-content-center">
                
                <div class="card shadow title text-center cardLayout my-5" style=" width: 18rem;">
                    
                    <img src="https://picsum.photos/id/1/200/300" class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Title:{{$announcement->title}}</h5>
                        <p class="card-text">Price:{{$announcement->price}}$</p>
                        <p class="card-text">Description:{{$announcement->body}}</p>
                        <p class="card-text">Name seller:{{$announcement->user->name}}</p>
                        <p class="card-text">Date ad:{{$announcement->created_at->format('d/m/Y')}}</p>
                        <p class="card-text">{{__('ui.category')}}:
                            <a
                            href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}
                        </a>
                    </p>
                    <a href="{{route('announcement.details', ['id'=>$announcement->id])}}"class="btn btn-sm btn-outline-none title">{{__('ui.read')}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@push('scripts')

<script>
    /*  Initialize Swiper  */

var swiper = new Swiper(".mySwiper", {
  effect: "cube",
  grabCursor: true,
  cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
  },
  pagination: {
      el: ".swiper-pagination",
  },
});

</script>
@endpush 
 -->
@endsection

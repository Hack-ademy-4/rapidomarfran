@extends('layouts.app')
@section('content')


<!-- bienvenido -->



<div class="container my-5 py-5 head">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-4">
            <h1 class="display-3 fw-bolder title">{{__('ui.welcome')}}</h1>
            <p class="small mt-5 tx-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quam
                deserunt, ab, iste nesciunt eos expedita fugit possimus esse officiis qui minima</p>
        </div>
    </div>
</div>

@if(session('announcement.create.success'))
<div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="tx-sec">¿Que estas buscando? 🤩</h2>
        </div>
    </div>
    <div class="row align-items-center my-3 py-3">
        <div class="col-12 col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nostrum minima inventore? Corrupti
                consequuntur dolores mollitia distinctio minima qui accusamus iure voluptate, ad a, tempora pariatur
                culpa id tenetur architecto.</p>
        </div>
        <div class="col-12 col-md-6">
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="categories">
                            <i class="fas fa-car fa-3x tx-w"></i>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <i class="fas fa-book fa-3x tx-w"></i>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <i class="fas fa-car fa-3x tx-w"></i>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <i class="fas fa-car fa-3x tx-w"></i>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <i class="fas fa-car fa-3x tx-w"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>



<div class="container my-5 py-5">
    <div class="row">
        @foreach($announcements as $announcement)
        <div class="col-12 col-md-4">

            <div class="card shadow title text-center cardLayout my-5" style=" width: 18rem;">

                <img src="https://picsum.photos/id/1/200/300" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->price}}$</p>
                    <p class="card-text">{{$announcement->body}}</p>
                    <p class="card-text">{{$announcement->user->name}}</p>
                    <p class="card-text">{{$announcement->created_at->format('d/m/Y')}}</p>
                    <p class="card-text">{{__('ui.category')}}
                        <a href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a>
                    </p>
                    <a href="{{route('announcement.details', ['id'=>$announcement->id])}}"
                        class="btn btn-sm btn-outline-none title">{{__('ui.read')}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container my-5 py-5 ">
    <div class="row">

    </div>
</div>











@endsection

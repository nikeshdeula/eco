@extends('components.layout')
@section('content')
    {{-- -----banner---- --}}
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @foreach ($products as $item)
                <div class="carousel-item active">
                    <img src="/img/img1.png" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{ $item['name'] }}</h3>
                        <p>plants</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    {{-- ----trending page ----- --}}
    <div class="container mt-5">
        <h2 class="text-center mt-5 text-dark">--Trending Products--</h2>
        @foreach ($products as $item)
            <div class="card mt-5 card-wrapper ">
                <a href="detail/{{$item['id']}}">
                <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">{{ $item['name'] }}</h4>
                    <p class="card-text">${{ $item['price'] }}</p>
                    {{-- <button class="btn bg-dark text-white">Add to cart</button> --}}
                </div>
            </a>
            </div>

    @endforeach
    </div>
@endsection

@extends('components.layout')
@section('content')
    <div class="container" style="height: 85vh;">
        <div class="row m-5">
            <div class="col-sm-6">
                <img class="w-50" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <h1>{{$product['name']}}</h1>
                <h3>Price : $ {{$product['price']}}</h3>
                <hr>
                <h6 style="border:1px dotted rgb(17, 17, 17); border-radius: 50px; padding: 3px 9px; max-width: fit-content;">Category : {{$product['category']}}</h6>
                <p>{{$product['description']}}</p>
                <hr> 
                <div class="d-flex gap-2">   
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden"  name="product_id" value="{{$product['id']}}">
                    <button class="btn bg-dark text-white">Add To Cart</button>
                </form>
                <a href="" class="btn bg-dark text-white">Buy Now</a>
            </div>
            </div>
        </div>
    </div>
@endsection
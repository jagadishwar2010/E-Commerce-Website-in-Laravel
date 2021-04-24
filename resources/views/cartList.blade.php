@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                @if(count($products))
                    <h3>Cart List</h3>
                    <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
                    @foreach ($products as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-4">
                                <a href="details/{{$item->id}}">
                                    <img class="searched-image" src="{{$item->gallery}}" >
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <a href="details/{{$item->id}}">
                                    <div>
                                        <h2>{{$item->name}}</h2>
                                    </div>
                                </a>
                                <h4><b>Price: </b>{{$item->price}}</h4>
                                <h5>{{$item->description}}</h5>
                            </div>
                            <div class="col-sm-3">
                                <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>Nothing to show!</h3>
                @endif
            </div>
        </div>
    </div>
@endsection

@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                @if(count($orders))
                    <h3>My orders</h3>
                    @foreach ($orders as $item)
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
                                <h5><b>Delivery status: </b>{{$item->status}}</h5>
                                <h5><b>Address: </b>{{$item->address}}</h5>
                                <h5><b>Payment status: </b>{{$item->payment_status}}</h5>
                                <h5><b>Payment method: </b>{{$item->payment_method}}</h5>
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

@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-8">
            <a href="/">Go back</a>
            <h2><b>{{$product['name']}}</b></h2>
            <h3><b>Price: </b>{{$product['price']}}</h3>
            <h3><b>Category: </b>{{$product['category']}}</h3>
            <h3><b>Details: </b>{{$product['description']}}</h3>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
<br><br>
@endsection

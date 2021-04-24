@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-8">
            <div class="trending-wrapper">
                @if(count($products))
                    <h3>Results for "{{$Request->input('query')}}" </h3>
                    @foreach ($products as $item)
                        <a href="details/{{$item['id']}}">
                            <div class="searched-item">
                                <img class="searched-image" src="{{$item['gallery']}}" >
                                <div>
                                    <h2>{{$item['name']}}</h2>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <h3>No results found!</h3>
                @endif
            </div>
        </div>
    </div>
@endsection

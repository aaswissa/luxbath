@extends('site.master')

@section('main_content')
<div class="container">
    <div class="row">
    @foreach($categories as $category)
    <div class="col">
    <div class="card m-2" style="width: 20rem;">
    <p>
<a href="{{ url('shop/' . $category['curl']) }}">
<img class="card-img-top" height="280" src="{{asset('images/' . $category['cimage'])}}" alt="Card image cap">
</a>
</p>
  
  <div class="card-body">
    <h5 class="card-title">{{ $category['ctitle']}}</h5>
    <p class="card-text">{!!$category['carticle']!!}</p>
    <a href="{{ url('shop/' . $category['curl']) }}" class="btn btn-primary">View Products</a>
  </div>
</div>
</div>
        @endforeach
    </div>
    </div>
@endsection
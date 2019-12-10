@extends('site.master')

@section('main_content')
<div class="container-fluid">
  <div class="row">
    @foreach($contents as $content)
    <div class="col-12 mt-3">
      <h3>{{$content->ctitle}}</h3>
      <p class="mt-3">{!! $content->carticle !!}</p>
    </div>
    @endforeach
  </div>
</div>

@endsection
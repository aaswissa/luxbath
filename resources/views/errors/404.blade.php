@php

$menus = App\Menu::all()->toArray();

@endphp

@extends('site.master')


@section('main_content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Page Not Found .... 404</h1>
    </div>
</div>
@endsection
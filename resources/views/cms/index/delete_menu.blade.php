@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h4>Please confirm menu link delete. Are you sure?</h4>
</div>

<div class="row">
  <div class="col-8">
    <form action="{{ url('cms/menu/' . $menu_id) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    @csrf
      <input class="btn btn-danger" type="submit" name="submit" value="Delete">
      <a class="btn btn-secondary " href="{{url('cms/menu')}}"> Cancel </a>
    </form>
  </div>
</div>
@endsection



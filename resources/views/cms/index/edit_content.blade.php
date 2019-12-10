@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h3>Edit Content</h3>
</div>

<div class="row">
  <div class="col-8">
    <form action="{{ url('cms/content/' . $content_item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="menu-id"><span class="text-danger">*</span> Select Content Menu:</label>
        <select name="menu_id" id="menu-id" class="form-control" >
          @foreach($menus as $menu)
          <option @if($content_item['menu_id'] == $menu['id']) selected="selected" @endif value="{{$menu['id']}}">{{$menu['link']}}</option>
          @endforeach
        </select>
        <span class="text-danger">{{$errors->first('menu_id')}}</span>
    </div> 

    <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ $content_item['ctitle'] }}" type="text" name="ctitle" id="title" class="form-control field-input-cms">
        <small class="text-muted">Title is start with uppercase (ex. The Title)</small>
        <br><span class="text-danger">{{$errors->first('ctitle')}}</span>
    </div> 


    <div class="form-group">
        <label for="article"><span class="text-danger">*</span> Article </label>
        <textarea name="article" id="article" class="form-control">{{ $content_item['carticle'] }}</textarea>
        <small class="text-muted">The Article is mins 20 characters</small>
        <br><span class="text-danger">{{$errors->first('article')}}</span>
    </div> 
      <input class="btn btn-primary" type="submit" name="submit" value="Update Content">
      <a class="btn btn-secondary " href="{{url('cms/content')}}"> Cancel </a>
    </form>
  </div>
</div>

@endsection


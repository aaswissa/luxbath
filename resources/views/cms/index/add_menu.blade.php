@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h3>Add Menu Link</h3>
</div>

<div class="row">
  <div class="col-8">
    <form action="{{ url('cms/menu') }}" method="POST" novalidate="novalidate" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="link"><span class="text-danger">*</span> Link:</label>
        <input value="{{ old('link') }}" type="text" name="link" id="link" class="form-control field-input-cms original-text">
        <small class="text-muted">The Menu Link on website, 2-50 characters (ex. Lux Bath)</small>
        <br><span class="text-danger">{{$errors->first('link')}}</span>
    </div>
    <div class="form-group">
        <label for="url"><span class="text-danger">*</span> URL: <small class="text-muted">  (Auto generated by your Link)</small> </label>
        <input value="{{ old('url') }}" type="text" name="url" id="url" class="form-control field-input-cms target-text">
        <small class="text-muted">Only lowercase a-z and 0-9 (ex. classic-bath)</small>
        <br><span class="text-danger">{{$errors->first('url')}}</span>
    </div> 
    <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ old('title') }}" type="text" name="title" id="title" class="form-control field-input-cms">
        <small class="text-muted">The menu title is start with uppercase (ex. The Title)</small>
        <br><span class="text-danger">{{$errors->first('title')}}</span>
    </div> 

      <input class="btn btn-primary" type="submit" name="submit" value="Save Menu">
      <a class="btn btn-secondary " href="{{url('cms/menu')}}"> Cancel </a>
    </form>
  </div>
</div>
@endsection


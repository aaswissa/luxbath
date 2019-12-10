@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h3>Add Category</h3>
</div>

<div class="row">
  <div class="col-8">
    <form action="{{ url('cms/categories') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title:</label>
        <input value="{{ old('ctitle') }}" type="text" name="ctitle" id="title" class="form-control field-input-cms original-text">
        <small class="text-muted">Title is start with uppercase (ex. The Title)</small>
        <br><span class="text-danger">{{$errors->first('ctitle')}}</span>
    </div> 
    <div class="form-group">
        <label for="url"><span class="text-danger">*</span> Category URL: <small class="text-muted">  (Auto generated by your Link)</small> </label>
        <input value="{{ old('url') }}" type="text" name="url" id="url" class="form-control field-input-cms target-text">
        <small class="text-muted">Only lowercase a-z and 0-9 (ex. classic-bath)</small>
        <br><span class="text-danger">{{$errors->first('url')}}</span>
    </div> 

    <div class="form-group">
        <label for="article"><span class="text-danger">*</span> Description </label>
        <textarea name="description" id="article" class="form-control">{{ old('description') }}</textarea>
        <small class="text-muted">The description is mins 20 characters</small>
        <br><span class="text-danger">{{$errors->first('description')}}</span>
    </div> 

    <div class="form-group">
        <label for="image"><span class="text-danger">*</span> Category Image </label>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose Category Image</label>
  </div>
  </div>
      <div class="form-group">
      <small class="text-muted">Type: JPG, JPEG, PNG, GIF | Max size: 5mb</small>
      <br><span class="text-danger">{{$errors->first('image')}}</span>
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Save Category">
      <a class="btn btn-secondary " href="{{url('cms/categories')}}"> Cancel </a>
    </form>
  </div>
</div>
@endsection


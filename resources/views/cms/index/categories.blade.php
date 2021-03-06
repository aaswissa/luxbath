@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3>Edit Categories</h3>
</div>

<p>
  <a  class="btn btn-primary btn-lm" href="{{ url('cms/categories/create') }}"> Add category</a>
</p>
<h2 class="mt-5">Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Category</th>
              <th>Category Image</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($categories as $category)
            <tr>
              
              <td> {{($category['ctitle']) }}  </td>
              <td> <img src="{{ asset('images/' . $category['cimage']) }}" height="128" width="100" alt=""></td>
              <td>
                <a class="btn btn-primary btn-sm" href="{{ url('cms/categories/' .$category['id'] . '/edit') }}"> Edit </a>  
                <a class="btn btn-danger btn-sm" href="{{ url('cms/categories/'. $category['id'])}}"> Delete</a>
            
              </td>

              

            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection

@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3>Add new Contnet </h3>
</div>

<p>
  <a  class="btn btn-primary btn-lm" href="{{ url('cms/content/create') }}"> Add Content</a>
</p>
<h2 class="mt-5">Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Title</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($contents as $content)
            <tr>
              
              <td> {{($content['ctitle']) }}  </td>
              <td>
                <a class="btn btn-primary btn-sm" href="{{ url('cms/content/' .$content['id'] . '/edit') }}"> Edit </a>  
                <a class="btn btn-danger btn-sm" href="{{ url('cms/content/'. $content['id'])}}"> Delete</a>
            
              </td>

              

            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection

@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3>Edit Products</h3>
</div>

<p>
  <a  class="btn btn-primary btn-lm" href="{{ url('cms/products/create') }}"> Add Product</a>
</p>
<h2 class="mt-5">Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Image</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($products as $product)
            <tr>
              
              <td> {{($product['ptitle']) }}  </td>
              <td> $ {{($product['price']) }}  </td>
              <td> <img src="{{ asset('images/' . $product['pimage']) }}" height="128" width="100" alt=""></td>
              <td>
                <a class="btn btn-primary btn-sm" href="{{ url('cms/products/' .$product['id'] . '/edit') }}"> Edit </a>  
                <a class="btn btn-danger btn-sm" href="{{ url('cms/products/'. $product['id'])}}"> Delete</a>
            
              </td>
            
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection

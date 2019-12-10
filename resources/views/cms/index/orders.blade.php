@extends('cms.cms_master')
@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3>Orders</h3>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>User</th>
              <th>Order Details</th>
              <th>Total</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($orders as $order)
            <tr>
              
              <td> {{ $order->name }}  </td>
              <td>
              <ul>
              @foreach(unserialize($order->order_data) as $myorder)
              
              <ul><span class="badge badge-primary badge-pill">{{$myorder['quantity']}} 

              </span> {{$myorder['name']}} for <strong> ${{$myorder['price']}} </strong> per each</ul> <br>


              @endforeach
              </ul>

              </td>
              <td> ${{ $order->total }}  </td>
              <td> {{ $order->created_at}}  </td>

              
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection

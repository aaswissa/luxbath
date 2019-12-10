@extends('site.master')

@section('main_content')


<div class="container mb-3">
    <div class="row gutters-3">
      <div class="col-md-7 col-lg-8">
        <div class="card card-style1">
          <div class="card-body">
            <ul class="list-group list-group-flush list-group-sm">
                @if($cart)
            @foreach ($cart as $item)
              <li class="list-group-item px-0 d-flex align-items-center">
                <div class="media">
                  <a href="shop-single.html">
                    <img src="{{asset('images/'.$item['attributes']['image'])}}" alt="product" width="75">
                  </a>
                  <div class="media-body ml-3">
                    <a href="shop-single.html" class="card-link text-secondary">{{ $item['name'] }}</a>
                    <div class="price"><span>${{ $item['price']}}</span></div>
                    <div class="font-size-sm"><span class="text-muted">Size:</span> small</div>
                  </div>
                </div>
                <div class="custom-spinner custom-spinner-vertical ml-auto">
                  <button onclick="location.href=`{{ url('shop/update-cart/plus/' . $item['id']) }}`" class="btn btn-icon btn-sm rounded-circle btn-text-secondary text-muted shadow-none up" type="button"><i class="material-icons">arrow_drop_up</i></button>
                  <input type="number" class="form-control form-control-sm bg-primary-faded text-primary my-1" value="{{ $item['quantity'] }}" min="1" max="999">
                  <button onclick="location.href=`{{ url('shop/update-cart/minus/' . $item['id']) }}`" class="btn btn-icon btn-sm rounded-circle btn-text-secondary text-muted shadow-none down" type="button"><i class="material-icons">arrow_drop_down</i></button>
                </div>
                <div class="dropdown ml-sm-5">
                  <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle dropdown-toggle no-caret" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">more_vert</i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right font-size-sm">
                    <button onclick="location.href=`{{ url('shop/remove-item/' . $item['id']) }}`" class="dropdown-item has-icon text-danger" type="button"><i class="material-icons mr-2">close</i> Remove item</button>
                  </div>
                </div>
              </li>
                @endforeach
                @else
                <h2 class="empty-bag-title text-center" data-bind="localeText: {key: 'lang_bag_empty_heading'}">Your cart is empty</h2>
                <h1 class="text-center"><i class="fas fa-shopping-cart"></i></h1>
                @endif


            </ul>
            <div class="text-right mt-3">
              <button data-toggle="tooltip" title="" class="btn btn-sm btn-faded-success has-icon mr-1" data-original-title="Refresh cart"><i class="material-icons">refresh</i> Refresh</button>
              <a href="{{url('shop/clear-cart')}}" class="btn btn-sm btn-faded-danger has-icon">Remove All<i class="material-icons">close</i></a>
              <!-- <input type=button src="{{ url('shop/clear-cart') }}" title="" class="btn btn-sm btn-faded-danger has-icon" data-original-title="Remove all items from cart" value="Remove all"><i class="material-icons">close</i>  -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-4 mt-1 mt-md-0">
        <div class="card card-style1">
          <div class="card-body">
            <!-- <div class="input-group input-group-sm">
              <input type="text" class="form-control border-warning shadow-none" placeholder="Coupon code" aria-label="Coupon code">
              <div class="input-group-append">
                <button class="btn btn-warning" type="button">Apply</button>
              </div>
            </div> -->
            <div class="mt-3 font-condensed">
              <div class="d-flex">
                <div class="text-muted">Bag Total</div>
                <div class="ml-auto font-weight-bold">${{Cart::getTotal()}}</div>
              </div>
              <div class="d-flex">
                <div class="text-muted">Bag Discount</div>
                <div class="ml-auto font-weight-bold">$0.00</div>
              </div>
              <hr class="my-1">
              <div class="d-flex">
                <div class="text-muted">Coupon Discount</div>
                <div class="ml-auto font-weight-bold">-</div>
              </div>
              <div class="d-flex">
                <div class="text-muted">Shipping Cost</div>
                <div class="ml-auto font-weight-bold">FREE</div>
              </div>
              <hr>
              <div class="d-flex">
                <div class="text-muted">Order Total</div>
                <div class="ml-auto font-weight-bold text-primary h4 mb-0">${{Cart::getTotal()}}</div>
              </div>
              <hr>
            </div>
            <a href="{{ url('shop/order-now') }}" class="btn btn-lg btn-block btn-primary">PROCEED TO CHECKOUT</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
    <div class="row">
        <div class="col mb-5">

        </div>
    </div>
  </div>
@endsection
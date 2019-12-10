@extends('site.master')

@section('main_content')
<div class="container mt-3">
    <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-gap-1 grid-gap-sm-3">
    </div>
    <!-- FLASH DEALS 1 -->
    <div class="card card-style1 mt-5">
      <div class="card-body">
        <h5 class="card-title">
          <i class="material-icons align-bottom text-warning">flash_on</i>
            Our Stunning Collection
          <span class="text-danger" id="flash-deals-countdown"></span>
        </h5>
        <div class="swiper-container" id="dealSlider2">
          <div class="swiper-wrapper">
          @foreach($products as $product)
          <div class="swiper-slide card card-product">
              <div class="card-body">
                <a href="{{ url('shop/products/' . $product->purl) }}"><img class="card-img-top" src="{{asset('images/'.$product->pimage)}}" alt="Card image cap"></a>
                <a href="{{ url('shop/products/' . $product->purl) }}" class="card-title card-link">{{$product->ptitle}}</a>
                <span class="badge badge-warning">{{rand(10,50)}}% OFF</span>
                <div class="price">
                  <span class="h4">${{$product->price}}</span>
                  <!-- <span class="h5 del">$59.99</span> -->
                </div>
              </div>
              <div class="card-footer">
            @if (! Cart::get($product->id))
              <input data-pid="{{$product->id}}" type="button" class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo add-to-cart-btn" value="Add to Cart">
              @else
                <input disabled="disabled" type="button" class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo add-to-cart-btn" value="Added to Cart">
              @endif
            </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-prev"><i class="material-icons">chevron_left</i></div>
          <div class="swiper-button-next"><i class="material-icons">chevron_right</i></div>
        </div>
      </div>
    </div>
    <!-- /FLASH DEALS -->
    <!-- BEST SELLERS & TOP CATEGORIES 2 -->
    <div class="d-grid grid-template-col-2 grid-template-col-lg-5 grid-template-col-xl-4 grid-gap-2 grid-gap-xl-3 mt-4 mb-3">
      <div class="card card-style1 grid-column-start-1 grid-column-end-3 grid-column-end-sm-2 grid-column-end-lg-3 grid-column-end-xl-2">
        <div class="card-body">
          <h5 class="card-title">Best Sellers</h5>
          <ul class="list-group list-group-flush list-group-sms">
            <li class="list-group-item px-0">
              <div class="media">
                <a href="{{url('shop/modern/edri-light-grey')}}">
                  <img src="lib/mimity/img/products/flash_deals_1.jpg" width="75" alt="product">
                </a>
                <div class="media-body ml-3">
                  <a href="{{url('shop/modern/edri-light-grey')}}" class="card-link text-secondary">Edri- Light Grey</a>
                  <div class="price"><span>$65.00</span></div>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="{{url('shop/unique-bath/hammam-bathroom-accessory-set')}}">
                  <img src="lib/mimity/img/products/flash_deals_3.jpg" width="75" alt="product">
                </a>
                <div class="media-body ml-3">
                  <a href="shop-single.html" class="card-link text-secondary">Hammam Bathroom Accessory Set</a>
                  <div class="price"><span>$86.00</span></div>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="{{url('shop/unique-bath/wayfair-basics-5-piece-bathroom-accessory-set')}}">
                  <img src="lib/mimity/img/products/flash_deals_4.jpg" width="75" alt="product">
                </a>
                <div class="media-body ml-3">
                  <a href="shop-single.html" class="card-link text-secondary">Wayfair Basics 5 Piece Bathroom Accessory Set
</a>
                  <div class="price">
                    <span>$73.00</span>
                    <span class="del">$79.00</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="{{url('shop/unique-bath/cole-4-piece-bathroom-accessory-set')}}">
                  <img src="lib/mimity/img/products/flash_deals_2.jpg" width="75" alt="product">
                </a>
                <div class="media-body ml-3">
                  <a href="{{url('shop/unique-bath/cole-4-piece-bathroom-accessory-set')}}" class="card-link text-secondary">Cole 4 Piece Bathroom Accessory Set
</a>
                  <div class="price">
                    <span>$87.00</span>
                    <span class="del">$98.90</span>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      @foreach($categories as $category)
      <div class="card card-style1">
        <a href="{{ 'shop/' . $category['curl']}}" class="card-link">
          <img class="card-img-top" src="{{asset('images/' . $category['cimage'])}}" height="420" alt="Men">
          <div class="card-body bg-primary-faded text-primary">
            <h5 class="mb-0"> {{ $category['ctitle']}}</h5>
          </div>
        </a>
 
      </div>
      @endforeach
    </div>
    <!-- /BEST SELLERS & TOP CATEGORIES 2 -->

  </div>
@endsection
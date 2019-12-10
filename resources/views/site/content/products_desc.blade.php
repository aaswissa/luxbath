@extends('site.master')

@section('main_content')


<div class="container-fluid mb-3">
    <div class="row gutters-3">
    <div class="col-sm-2 mt-5">

        <!-- FILTER MODAL -->
        <div class="modal fade modal-content-left modal-shown-static" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document" style="max-width:100px">
            <div class="modal-content">
              <div class="modal-header border-bottom shadow-sm z-index-1">
                <h5 class="modal-title" id="filterModalLabel">Shop Filters</h5>
                <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                  <i class="material-icons">close</i>
                </button>
              </div>

              <div class="modal-body p-0 scrollbar-width-thin">
              <!-- ->orderBy('p.price', 'desc') -->

              </div>

              <div class="modal-body p-0 scrollbar-width-thin">
                <div class="accordion accordion-caret" id="accordionSidebar">
                  <div class="card card-style1">

                  <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-categories" aria-expanded="true">
                      PRICE
                    </a>
                    <div id="filter-categories" class="collapse show">
                      <div class="card-body pt-0">
                        <ul class="list-tree metismenu">
                          <li class="mm-active">
                            <a href="{{ url()->previous() }}" class="" aria-expanded="true"> <i class="fas fa-times"></i> Clear Price Filter </a> <!-- <small class="text-muted">(120)</small> -->
                            <ul class="mm-collapse mm-show">
                            </ul>
                          </li>
                          <!-- <li>
                            <a href="#" class="has-arrow">Women's Fashion <small class="text-muted">(140)</small></a>
                            <ul class="mm-collapse">
                              <li><a href="javascript:void(0)">Clothing <small class="text-muted">(40)</small></a></li>
                              <li><a href="javascript:void(0)">Shoes <small class="text-muted">(30)</small></a></li>
                              <li><a href="javascript:void(0)">Jewelry <small class="text-muted">(25)</small></a></li>
                              <li><a href="javascript:void(0)">Handbags <small class="text-muted">(45)</small></a></li>
                            </ul>
                          </li> -->
                                  </ul>
                      </div>
                    </div>


                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-categories" aria-expanded="true">
                      CATEGORIES
                    </a>
                    @foreach($categories as $category)

                    <div id="filter-categories" class="collapse show">
                      <div class="card-body pt-0">
                        <ul class="list-tree metismenu">
                          <li class="mm-active">
                            <a href="{{ url('shop/' . $category['curl']) }}" class="" aria-expanded="true">{{ $category['ctitle']}} </a> <!-- <small class="text-muted">(120)</small> -->
                            <ul class="mm-collapse mm-show">
                              <!-- <li class="mm-active"><a href="javascript:void(0)" aria-expanded="true">Clothing <small class="text-muted">(40)</small></a></li> -->
                              <!-- <li><a href="{{ url('shop/' . $category['curl']) }}">{{ $category['ctitle']}} <small class="text-muted">(25)</small></a></li> -->
                            </ul>
                          </li>
                          <!-- <li>
                            <a href="#" class="has-arrow">Women's Fashion <small class="text-muted">(140)</small></a>
                            <ul class="mm-collapse">
                              <li><a href="javascript:void(0)">Clothing <small class="text-muted">(40)</small></a></li>
                              <li><a href="javascript:void(0)">Shoes <small class="text-muted">(30)</small></a></li>
                              <li><a href="javascript:void(0)">Jewelry <small class="text-muted">(25)</small></a></li>
                              <li><a href="javascript:void(0)">Handbags <small class="text-muted">(45)</small></a></li>
                            </ul>
                          </li> -->
                                  </ul>
                      </div>
                    </div>
                    @endforeach
                  </div>

                  <!-- <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-price" aria-expanded="true">
                      PRICE
                    </a>
                    <div id="filter-price" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="d-flex justify-content-between mb-3">
                          <input type="text" class="form-control form-control-sm rounded-pill bg-light text-center font-condensed mr-2 minw-0" id="price-slider-min" readonly="">
                          <input type="text" class="form-control form-control-sm rounded-pill bg-light text-center font-condensed ml-2 minw-0" id="price-slider-max" readonly="">
                        </div>
                        <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(20%, 0px) scale(0.5, 1);"></div></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="70.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-300%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="100.0" aria-valuenow="70.0" aria-valuetext="70.00"><div class="noUi-touch-area"></div></div></div></div></div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-size" aria-expanded="true">
                      SIZE
                    </a>
                    <div id="filter-size" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-small">
                          <label class="custom-control-label" for="size-small">Small</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-medium" checked="">
                          <label class="custom-control-label" for="size-medium">Medium</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-large" checked="">
                          <label class="custom-control-label" for="size-large">Large</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-extra-large">
                          <label class="custom-control-label" for="size-extra-large">Extra Large</label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-colors" aria-expanded="true">
                      COLORS
                    </a>
                    <div id="filter-colors" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="custom-color custom-color-lg">
                          <div class="color-item">
                            <input type="checkbox" id="colorBlue" class="custom-control-input" checked="">
                            <label class="rounded-circle" for="colorBlue" style="background-color:#36A2EB"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorGreen" class="custom-control-input">
                            <label class="rounded-circle" for="colorGreen" style="background-color:#4cc065"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorRed" class="custom-control-input" checked="">
                            <label class="rounded-circle" for="colorRed" style="background-color:#f05a5c"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorYellow" class="custom-control-input" checked="">
                            <label class="rounded-circle" for="colorYellow" style="background-color:#ffb300"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorTeal" class="custom-control-input">
                            <label class="rounded-circle" for="colorTeal" style="background-color:#19aec6"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-brands" aria-expanded="true">
                      BRANDS
                    </a>
                    <div id="filter-brands" class="collapse show">
                      <div class="card-body pt-0">
                        <span class="input-icon">
                          <i class="material-icons">search</i>
                          <input type="search" class="form-control" id="searchBrand" placeholder="Search brand...">
                        </span>
                        <div id="brandList" class="mt-3 overflow-auto scrollbar-width-thin bg-lights px-1" style="max-height: 250px;">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-tommy-hilfiger">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-tommy-hilfiger">Tommy Hilfiger <small class="text-muted">43</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-nike">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-nike">Nike <small class="text-muted">245</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-hugo-boss">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-hugo-boss">Hugo Boss <small class="text-muted">221</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-burberry">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-burberry">Burberry <small class="text-muted">157</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-levi's">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-levi's">Levi's <small class="text-muted">272</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-gucci">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-gucci">Gucci <small class="text-muted">218</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-lacoste">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-lacoste">Lacoste <small class="text-muted">166</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-adidas">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-adidas">Adidas <small class="text-muted">244</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-the-north-face">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-the-north-face">The North Face <small class="text-muted">10</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-versace">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-versace">Versace <small class="text-muted">205</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-rolex">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-rolex">Rolex <small class="text-muted">203</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-diesel">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-diesel">Diesel <small class="text-muted">132</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-calvin-klein">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-calvin-klein">Calvin Klein <small class="text-muted">55</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-armani-exchange">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-armani-exchange">Armani Exchange <small class="text-muted">207</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-prada">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-prada">Prada <small class="text-muted">42</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-zara">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-zara">Zara <small class="text-muted">112</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-vans">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-vans">Vans <small class="text-muted">192</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-hermès">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-hermès">Hermès <small class="text-muted">88</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-supreme">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-supreme">Supreme <small class="text-muted">186</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-converse">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-converse">Converse <small class="text-muted">107</small></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="card card-style1 border-top">
                    <div class="card-header no-caret px-5 py-2 text-center bg-white">
                      <button class="btn btn-primary rounded-pill btn-sm btn-block" data-dismiss="modal">APPLY</button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /FILTER MODAL -->
      </div>
      <div class="col-sm-10">
        <div class="card card-style1">
          <div class="card-body pb-0 d-block d-md-none">
            <!-- <button type="button" data-toggle="modal" data-target="#filterModal" class="btn btn-faded-primary btn-sm has-icon">
              <i class="material-icons mr-2">filter_list</i> Filter
            </button> -->
          </div>
          <!-- <div class="card-body d-flex align-items-center py-2">
            Sort by :
            <select class="custom-select custom-select-sm w-auto ml-1 mr-auto">
              <option>Popularity</option>
              <option>Low - High Price</option>
              <option>High - Low Price</option>
              <option>Average Rating</option>
              <option>A - Z Order</option>
              <option>Z - A Order</option>
            </select>
            <a href="shop-grid.html" data-toggle="tooltip" title="" class="btn btn-sm btn-text-primary btn-icon rounded-circle active" data-original-title="Show Grid"><i class="material-icons">apps</i></a>
            <a href="shop-list.html" data-toggle="tooltip" title="" class="btn btn-sm btn-text-primary btn-icon rounded-circle ml-1" data-original-title="Show List"><i class="material-icons">list</i></a>
          </div> -->
        </div>
        <div class="col-10">
        <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-template-col-xl-4 grid-gap-1 grid-gap-sm-3 mt-3">
        @foreach($products as $product)
          <div class="card card-product card-style1">
            <div class="card-body">
              <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}"><img class="card-img-top" src="{{asset('images/'.$product->pimage)}}" alt="Card image cap"></a>
              <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}" class="card-title card-link">{{$product->ptitle}}</a>
              <span class="badge badge-success">New arrival</span>
              <div class="price"><span class="h5">${{$product->price}}</span></div>
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
        </div>
        <div class="row mt-3">
      <div class="col-12">
        {{ $products->links() }}
      </div>
    </div>
        <!-- <div class="card card-style1 mt-3">
          <div class="card-body">
            <ul class="pagination pagination-circle justify-content-center mb-0">
              <li class="page-item disabled"><span class="page-link has-icon"><i class="material-icons">chevron_left</i></span></li>
              <li class="page-item active"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item"><a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a></li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </div>

















<!-- <div class="container">
    <div class="row">
        <div class="col">

      </div>
    </div>

    <div class="row">
    <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-template-col-xl-4 grid-gap-1 grid-gap-sm-3 mt-3">
                @foreach($products as $product)
        <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
              <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}"><img class="card-img-top" src="{{asset('images/'.$product->pimage)}}" alt="Card image cap"></a>
              <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}" class="card-title card-link">{{$product->ptitle}}</a>
              <span class="badge badge-success">New arrival</span>
              <div class="price"><span class="h5">${{$product->price}}</span></div>
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
    <div class="row mt-3">
      <div class="col-12">
        {{ $products->links() }}
      </div>
    </div>
    </div>

</div> -->
@endsection

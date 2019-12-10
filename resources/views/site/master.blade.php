<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Toastr CDNs -->
    <link rel="stylesheet" href="{{asset('lib/mimity/dist/css/style.min.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />   
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Font & Icon -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Favicon -->
  <script src="https://kit.fontawesome.com/c708f4d3a4.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('lib/mimity/img/favicon/favicon.ico')}}">
  <link rel="icon" type="image/x-icon" href="{{asset('lib/mimity/img/favicon/favicon.ico')}}">
  <link rel="icon" type="image/png" href="{{asset('lib/mimity/img/favicon/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{asset('lib/mimity/img/favicon/touch-icon-iphone.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('lib/mimity/img/favicon/touch-icon-ipad.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('lib/mimity/img/favicon/touch-icon-iphone-retina.png')}}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{asset('lib/mimity/img/favicon/touch-icon-ipad-retina.png')}}">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{asset('lib/mimity/plugins/swiper/swiper.min.css')}}">
  <link rel="stylesheet" href="{{ asset('../public/css/style.css') }}">
  <!-- Main style -->
 <script>
    var BASE_URL = "{{ url('') }}/";
    console.log(BASE_URL);
  </script>
  <title>LuxBath | {{!empty($page_title) ? $page_title : 'Home'}}</title>
</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="nav nav-circle d-flex d-lg-none">
        <a href="#menuModal" data-toggle="modal" class="nav-link nav-icon"><i class="material-icons">menu</i></a>
      </nav>
      <nav class="nav ml-3 ml-lg-0">
        <a href="{{ url('') }}" class="nav-link has-icon p-0 bg-white">
        <i class="material-icons mr-1">bathtub</i><b>LuxBath</b>
        <!-- <img src="lib/mimity/img/logo.png" alt="Logo" height="40"> -->
        </a>
      </nav>
      <nav class="nav nav-main nav-gap-x-1 nav-pills ml-3 d-none d-lg-flex">
          <a class="nav-item nav-link" href="{{ url('shop') }}">
            Shop
          </a>
          @if( !empty($menus) )
        @foreach ($menus as $menu)
          <a class="nav-item nav-link" href="{{ url($menu['murl']) }}">
            {{$menu['link']}}
          </a>
        @endforeach
        @endif
      </nav>
      <nav class="nav nav-circle nav-gap-x-1 ml-auto">
        <!-- <a class="nav-link nav-icon" data-toggle="modal" href="#searchModal">
          <i class="material-icons">search</i>
        </a>
        <a class="nav-link nav-icon has-badge d-none d-sm-flex" href="account-wishlist.html">
          <i class="material-icons">favorite_border</i>
          <span class="badge badge-pill badge-danger">3</span>
        </a> -->
        <a class="nav-link nav-icon has-badge"  href="{{url('shop/cart')}}"> <!-- data-toggle="modal" href="#cartModal" -->
          <i class="material-icons">shopping_cart</i>
          @if(!Cart::isEmpty())
          <span class="badge badge-pill badge-danger">{{Cart::getTotalQuantity()}}</span>
          @endif
        </a>

        <ul>
        @if(! Session::has('user_id'))

        <li class="btn btn-faded-primary has-icon btn-sm"><a href="{{ url('user/signin') }}"> <i class="fas fa-sign-in-alt"></i> Sign in</a></li>
        
        <li class="btn btn-faded-primary has-icon btn-sm"><a href="{{ url('user/signup') }}"> <i class="far fa-file-alt"></i>  Sign up</a></li>
        @else
        <li class="btn btn btn-sm"><a href="{{ url('user/profile') }}">  {{Session::get('user_name')}} </a></li>
        @if(Session::has('is_admin'))
        <li class="btn btn-faded-primary has-icon btn-sm"><a href="{{ url('cms/dashboard') }}"> <i class="fas fa-cogs"></i> </a></li>
        @endif
        <li class="btn btn-faded-primary has-icon btn-sm"><a href="{{ url('user/logout') }}"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
        @endif
        <!-- <button type="button" data-toggle="modal" data-target="#signinModal" class="btn btn-faded-primary has-icon btn-sm">
        <i class="material-icons mr-1">person</i> Sign in
      </button>
      <button type="button" data-toggle="modal" data-target="#signinModal" class="btn btn-faded-primary has-icon btn-sm">
        <i class="material-icons mr-2">launch</i> Sign up
      </button> -->
      </ul>

      </nav>

    </div>
  </header>
  <!-- /HEADER -->
  @yield('main_content')

  <!-- FOOTER -->
  <div class="footer">

    <div class="container">
      <div class="d-grid grid-template-col-sm-2 grid-template-col-lg-4">
        <!-- <div class="px-3 text-center">
          <h5>Subscribe</h5>
          <p>and get <strong class="text-primary">10% discount</strong></p>
          <form>
            <div class="form-group">
              <input type="email" class="form-control rounded-pill text-center" placeholder="Enter your email">
            </div>
            <button type="button" class="btn btn-primary btn-block rounded-pill">SUBSCRIBE</button>
          </form>
        </div> -->
        <div>
          <h5>Customer Service</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
          <a href="javascript:void(0)" class="list-group-item list-group-item-action">Terms and Conditions</a>
          <a href="faq.html" class="list-group-item list-group-item-action">FAQs</a>
          </div>
        </div>
        <div>
          <h5>About</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fas fa-paint-roller"></i> DecorLux</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Bath Staff</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Our Story</a>
          </div>
        </div>
        <div>
          <h5>Social</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
        </div>
        <div>
          <h5>Legal</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Privacy Policy</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Return and Refund</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">LuxBath &copy; {{ now()->year }}</a>
          </div>
        </div>

        <!-- <div>
          <h5>Download The App</h5>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="../../img/app/google-play.svg" alt="Google Play Logo" height="30">
              <div class="media-body">
                <small>Get it on</small>
                <h5>Google Play</h5>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="../../img/app/apple.svg" alt="Apple Logo" height="30">
              <div class="media-body">
                <small>Download on the</small>
                <h5>App Store</h5>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="../../img/app/windows.svg" alt="Windows Logo" height="30">
              <div class="media-body">
                <small>Get it from</small>
                <h5>Microsoft Store</h5>
              </div>
            </div>
          </a>
        </div> -->
      </div>
    </div>
  </div>

  <!-- /FOOTER -->

  <!-- SIGN-IN MODAL -->
  <div class="modal fade modal-content-right" id="signinModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">

      <div class="modal-content" id="signinContent">
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Sign in</h3>
            <em>to your account</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
        <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf()
                <div class="form-group">
                    <label for="email">* Email</label>
                    <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>

                </div>
                <input type="submit" value="Signin" class="btn btn-primary">
            </form>
          <!-- <form id="formSignin">
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">mail_outline</i>
                <input type="email" class="form-control" id="email"  value="{{ old('email') }}" name="email" placeholder="Email address" required>
              </span>
            </div>
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">lock_open</i>
                <input type="password" class="form-control" id="signInPasswordInput" placeholder="Password" required>
              </span>
            </div>
            <div class="form-group d-flex justify-content-between">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberCheck" checked>
                <label class="custom-control-label" for="rememberCheck">Remember me</label>
              </div>
              <u><a href="#" class="text-primary small" id="showResetContent">Forgot password ?</a></u>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </form> -->
          <hr>
          <p class="font-italic">Don't have an account ? <u><a href="#" id="showSignupContent">Sign Up</a></u></p>
          <hr>
          <div class="text-center">
            <p class="font-italic">Or sign in via</p>
            <button class="btn btn-icon btn-faded-primary rounded-circle" data-toggle="tooltip" title="Facebook" data-container="#signinContent">
              <i class="custom-icon" data-icon="facebook" data-size="20x20"></i>
            </button>
            <button class="btn btn-icon btn-faded-info rounded-circle" data-toggle="tooltip" title="Twitter" data-container="#signinContent">
              <i class="custom-icon" data-icon="twitter" data-size="20x20"></i>
            </button>
            <button class="btn btn-icon btn-faded-danger rounded-circle" data-toggle="tooltip" title="Google" data-container="#signinContent">
              <i class="custom-icon" data-icon="gplus" data-size="20x20"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="modal-content" id="signupContent" hidden>
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Sign up</h3>
            <em>create an account</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form id="formSignup">
            <div class="form-group">
              <input type="text" class="form-control" id="signUpNameInput" placeholder="Full name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="signUpEmailInput" placeholder="Email address" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="signUpPasswordInput" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="signUpPasswordConfirmInput" placeholder="Confirm password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </form>
          <hr>
          <button class="btn btn-faded-light has-icon btn-sm showSigninContent" type="button">
            <i class="material-icons">chevron_left</i> Back to sign in
          </button>
        </div>
      </div>

      <div class="modal-content" id="resetContent" hidden>
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Reset Password</h3>
            <em>enter your email address</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form id="formReset">
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">mail_outline</i>
                <input type="email" class="form-control" id="resetEmailInput" placeholder="Email address" required>
              </span>
            </div>s
            <button type="submit" class="btn btn-danger btn-block">RESET</button>
          </form>
          <hr>
          <button class="btn btn-faded-light has-icon btn-sm showSigninContent" type="button">
            <i class="material-icons">chevron_left</i> Back to sign in
          </button>
        </div>
      </div>

      <div class="modal-content" id="resetDoneContent" hidden>
        <div class="modal-header pb-0 justify-content-end">
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body text-center pt-0">
          <i class="material-icons text-primary display-4">check_circle_outline</i>
          <h3>CHECK YOUR EMAIL</h3>
          <p>We just sent you a letter with instructions to reset your password</p>
          <button class="btn btn-primary btn-block showSigninContent" type="button">Sign in</button>
        </div>
      </div>

    </div>
  </div>
  <!-- /SIGN-IN MODAL -->

  <!-- MENU MODAL -->
  <div class="modal fade modal-content-left" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header align-items-center border-bottom shadow-sm z-index-1">
         <i class="material-icons mr-1">bathtub</i><b>LuxBath</b>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body px-0 scrollbar-width-thin">
          <ul class="menu" id="menu">
            <li class="no-sub"><a href="{{url('')}}"><i class="material-icons">home</i> Home</a></li>
            <li class="no-sub"><a href="{{url('shop')}}"><i class="material-icons">shop</i> Shop </a></li>
                    @if( !empty($menus) )
        @foreach ($menus as $menu)
          <a class="nav-item nav-link" href="{{ url($menu['murl']) }}">
            {{$menu['link']}}
          </a>
        @endforeach
        @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /MENU MODAL -->

  <!-- SEARCH MODAL -->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-1 p-lg-3">
          <form>
            <div class="input-group input-group-lg input-group-search">
              <div class="input-group-prepend">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="button" data-dismiss="modal">
                  <i class="material-icons">chevron_left</i>
                </button>
              </div>
              <input type="search" class="form-control form-control-lg border-0 shadow-none mx-1 px-0 px-lg-3" id="searchInput" placeholder="Search..." required>
              <div class="input-group-append">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="submit">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /SEARCH MODAL -->

  <!-- CART MODAL -->
  <div class="modal fade modal-content-right modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom">
          <h5 class="modal-title" id="cartModalLabel">You have 4 items in your cart</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body scrollbar-width-thin">
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html" class="mr-2"><img src="../../img/products/1_small.jpg" width="50" height="50" alt="Hanes Hooded Sweatshirt"></a>
                <div class="media-body">
                  <a href="shop-single.html" class="d-block text-body" title="Hanes Hooded Sweatshirt">Hanes Hooded Sweatshirt</a>
                  <em class="text-muted">1 x $18.56</em>
                </div>
                <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><i class="material-icons">close</i></button>
              </div>
            </li>
          </ul>

        </div>
        <div class="modal-footer border-top">
          <div class="mr-auto">
            <em>Subtotal</em>
            <h5 class="mb-0 text-dark font-weight-bold font-condensed">$152.04</h5>
          </div>
          <a href="cart.html" class="btn btn-faded-success">View Cart</a>
          <a href="shipping.html" class="btn btn-success">Checkout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('lib/mimity/dist/js/script.min.js')}}"></script>
  <script src="{{asset('lib/mimity/plugins/swiper/swiper.min.js')}}"></script>
  <script src="{{asset('lib/mimity/plugins/jquery-countdown/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('lib/mimity/dist/js/app.min.js')}}"></script>
  <script>
  $(() => {
  
  App.dealSlider2('#dealSlider2')


})
  </script>
  
  <script>
      $('.add-to-cart-btn').on('click', function(){
      var pid = $(this).data('pid');
      
      $.ajax({
        url: BASE_URL + 'shop/ajax/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: {pid: pid},
        success: function(res){
          window.location.reload();
        }
      });
    
});
  </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        @if(Session::has('sm'))
        <script>
              toastr.options.positionClass = 'toast-top-full-width';
              toastr.success("{{ Session::get('sm') }}");
        </script>
        @endif
</body>

</html>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  <!-- Style -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <link rel="stylesheet" href="{{asset('lib/mimity/plugins/swiper/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../public/css/style.css') }}"> -->

    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <link rel="stylesheet" href="{{asset('lib/mimity/dist/css/style.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../public/css/style.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />   




  <script>
    var BASE_URL = "{{ url('') }}/";
    console.log(BASE_URL);
  </script>
  <title>DecorLux Admin Panel</title>
</head>

<body>

  <header>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><i class="material-icons mr-1">bathtub</i><b> | Admin</b>
</a>
      <ul class="nav px-3">
      <li class="nav-item text-nowrap">
          <a class="btn btn-outline-light btn-sm" target="_blank" href="{{url('')}}">Back to website</a>
        </li> 
        <li class="ml-2 nav-item text-nowrap">
          <a class="btn btn-outline-light btn-sm" href="{{ url('user/logout') }}">Logout</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container-fluid">
      <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar mysidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/dashboard') }}">
                  <b> Dashboard </b>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/menu') }}">
                <i class="fas fa-bars"></i> Menu
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/content') }}">
                <i class="far fa-newspaper"></i> Content 
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/categories') }}">
                <i class="fas fa-sitemap"></i> Categories 
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/products') }}">
                <i class="fas fa-box-open"></i> Products 
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/orders') }}">
                <i class="fas fa-money-check-alt"></i> Orders 
                </a>
              </li>
            </ul>
          </div>
        </nav>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 main-min-h">
    @yield('main_content')
  </main>
  </div>
  </div>
  <script>
      $('#article').summernote({
        placeholder: 'Hello Admin...',
        tabsize: 2,
        height: 180
      });
    </script>


  <!-- <footer class="bg-dark myfooter">
    <div class="container-fluid">
      <div class="row">
        <div class="col p-3">
          <p class="text-center text-white">
            LuxBath Admin Panel by DecorLux &copy; {{date('Y')}}
          </p>
        </div>
      </div>
    </div>

  </footer> -->

<script>
$('.field-input-cms').on('focusin focusout', function(){
$(this).next().toggleClass('text-muted').toggleClass('text-black');
});
</script>

<script>
String.prototype.toPermalink = function(){ //add method to String object of JavaScript Core
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('.original-text').on('keyup', function (){
$('.target-text').val($(this).val().toPermalink());
});
</script>



  <!-- Shlomi Cart Solution -->
  <script src="{{asset('lib/mimity/dist/js/myscript.js')}}"></script>

  <!-- Main script -->
  <script src="{{asset('lib/mimity/dist/js/script.min.js')}}"></script>
  <script src="{{asset('../../../resources/js/script.js')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('lib/mimity/plugins/swiper/swiper.min.js')}}"></script>
  <script src="{{asset('lib/mimity/plugins/jquery-countdown/jquery.countdown.min.js')}}"></script>
  
  <!-- Application script -->
  <script src="{{asset('lib/mimity/dist/js/app.js')}}"></script>
  
  <script>
    // My cart for final project :) many workarounds BH


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
$(() => {
      App.atcDemo() // Add to Cart Demo
      App.atwDemo() // Add to Wishlist Demo
      App.homeSlider('#homeSlider')
      App.dealSlider2('#dealSlider2')
      App.brandSlider('#brandSlider')
      App.colorOption()

      // example countdown, 6 hours from now for flash deals
      var countdown = new Date()
      countdown.setHours(countdown.getHours() + 7)
      $('#flash-deals-countdown').countdown(countdown, function (e) {
        $(this).text(e.strftime('%H:%M:%S'))
      })

    })
  </script>
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script> -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        @if(Session::has('sm'))
        <script>
              toastr.options.positionClass = 'toast-top-full-width';
              toastr.success("{{ Session::get('sm') }}");
        </script>
        @endif
        </body>
</html>


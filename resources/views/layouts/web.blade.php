<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{asset('tunga')}}/css/app.css"  rel="stylesheet" >
        {{--<link href="{{asset('tunga')}}/css/style.css"  rel="stylesheet" >
        <link href="{{asset('tunga')}}/css/style.scss"  rel="stylesheet" >--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
        {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"  integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="  crossorigin="anonymous" />--}}
        {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css" rel="stylesheet" />--}}
        <link href="{{ asset('css/custom.css') }}"  rel="stylesheet" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>

        {{--slider--}}
        {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
        {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <style>

.grayscale {
  border: 0px solid black;
  filter: grayscale(100%);
  -webkit-filter: grayscale(100%);
  /* For Webkit browsers */
  filter: gray;
  /* For IE 6 - 9 */
  -webkit-transition: all .6s ease;
  /* Transition for Webkit browsers */
}
.grayscale:hover {
  filter: grayscale(0%);
  -webkit-filter: grayscale(0%);
  filter: none;
}
#owl-demo .owl-item {
  margin-right: 5px;

}
#owl-demo .owl-item img {
  display: block;
  width: 100%;
  height: auto;
}

@media (min-width: 768px) {

    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }

    .carousel-inner .carousel-item-start.active,
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start {
  transform: translateX(0);
}
        </style>
    </head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-lg">
        <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{asset('tunga')}}/img/logoo.png" alt="" width="100" height="50">
          </a>
        </div>
      </nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">{{ __('messages.home') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ??????????????????
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php $product=DB::table('products')->get(); ?>
             @foreach($product as $products)
            <li><a class="dropdown-item" href="#">{{$products->title}}</a></li>
          @endforeach
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('event')}}">?????? ??????????????</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('blog')}}">????????</a>
          </li>

          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('timeline')}}">{{ __('messages.timeline') }}</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active" href="{{route('about')}}" id="navbarDropdown" >
              ??????????
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">??????????????????</a>
          </li>

      </ul>
      <form class="d-flex search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>

      </form>

        {{--<select class="selectpicker" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>ENG</option>
            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Espa??ol'>MNG</option>
        </select>--}}
        <select class="selectpicker" data-width="fit" data-url="{{route('change_language')}}" id="changeLanguage">
            <option value="en" <?php if(app()->getLocale() == 'en') echo 'selected'; ?>>ENG</option>
            <option value="mn" <?php if(app()->getLocale() == 'mn') echo 'selected'; ?>>MNG</option>
        </select>
    </div>
  </div>
</nav>

@yield('mainContent')

<div class="container-fluid footer">
      <div class="container">
                <div class="row">
                        <div class="col-md-3 col-sm-12">
                                <img src="{{asset('tunga')}}/img/logoo.png">
                                        <div class="social">
                                        <img src="{{asset('tunga')}}/img/fb.png">
                                        <img src="{{asset('tunga')}}/img/insta.png">
                                        <img src="{{asset('tunga')}}/img/twitter.png">
                                        <img src="{{asset('tunga')}}/img/lin.png">
                                </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-header">Email</div><br>
                            <div class="footer-row">hello@tunga-finance.com</div>
                            <div class="footer-row">tungalag@tunga-finance.com</div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-header">Phone</div><br>
                            <div class="footer-row">+976 77070095</div>
                            <div class="footer-row">+9769509 0095</div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-header">Address</div><br>
                            <div class="footer-row">1808 Business tower</div>
                            <div class="footer-row">Chinggis avenue 5, Sukhbaatar</div>
                            <div class="footer-row">district, Ulaanbaatar Mongolia</div>
                        </div>
                        </div>
                    <hr>
                    <div class="row">
                        TUN CONSULT 2021, All right reserved, it is prohibited to use the information on the site in any way.
                    </div>
                 </div>
        </div>
    </div>

  <script src="{{asset('tunga')}}/js/app.js"></script>

  <script>

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function() {

        /*$("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });*/

        $('#changeLanguage').change(function() {

            console.log("lang change");

            var url = $(this).data('url');
            var language = $(this).val();
            console.log(language);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                dataType: 'json',
                type:'POST',
                data: {
                    language: language
                },
                success: function success(){
                    window.location.reload();
                }
            });
        });
    });
</script>
</body>

</html>

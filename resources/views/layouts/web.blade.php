<html>
    <head>
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <link href="{{asset('tunga')}}/css/app.css"  rel="stylesheet" >
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
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
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Нүүр</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Үйлчилгээ
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Үйл явдлууд</a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('blog')}}">Блог</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active" href="{{route('about')}}" id="navbarDropdown" >
              Тухай
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Холбогдох</a>
          </li>

      </ul>
      <form class="d-flex search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
      
      </form>
      <select class="selectpicker" data-width="fit">
    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
  <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
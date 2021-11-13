@extends('layouts.web')
@section('mainContent')
<div class="container-fluid" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('tunga')}}/img/slide.jpeg" class="d-block w-100" alt="...">
          </div>
         
        </div>
      </div>

</div>

<section class="pt-5 pb-5" >
    <div class="container" >
        <div class="row" >
          
            <div class="col-12" >
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="top:-140px;">

                    <div class="carousel-inner">
                            <div id="owl-demo">
                            @foreach($slider as $sliders)
                                <div class="owl-item grayscale" style="width: 293px;">
                                        <img src="{{$sliders->image}}" alt="Owl Image">
                                </div>
                             
                            @endforeach
                            </div>
                       
                      
                    </div>
              
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col-12 col-md-12">
        <h3 class="mb-3">Бүтээгдэхүүн үйлчилгээ </h3>
    </div>
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-2">
                <img src="img/icons.png" class="img-fluid rounded-start iconimg" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            
                </div>
              </div>
            </div>
          </div>
    </div>
 
  
   
 
  </div>
</div>

<div class="container-fluid " style="background-image: url('{{asset('tunga')}}/img/bg.png'); margin-top:50px; height:500px;">
    <section class="pt-5 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3" style="color:white;">What our client says</h3>
                </div>
            
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
    
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body saying">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body saying">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
                             
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
                               
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container-lg" style="margin-top:40px;">
    <?php $blog=DB::table('blogs')->get(); ?>
    <div class="row">
        <div class="col-12">
            <h3 class="mb-3">Blog </h3>
        </div>
      @foreach($blog as $blogs)
      <div class="col-lg-3 col-sm-12">
        <div class="card blogs" style="width: 18rem;border:none;">
            <img src="{{$blogs->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$blogs->title}}</h5>
              <p class="card-text">{!!$blogs->desc!!}</p>
              <a href="{{ route('blog.detail',$blogs->id) }}" class="btn btn-primary">Унших</a>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
 
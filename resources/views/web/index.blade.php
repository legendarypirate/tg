@extends('layouts.web')
@section('mainContent')
    <div class="container-fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('tunga')}}/img/slide.jpeg" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>

    </div>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
                         style="top:-140px;">

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
                <h3 class="mb-3 prod-head">Бүтээгдэхүүн үйлчилгээ </h3>
                <hr class="prod" style=" height:10px;color:#0e4a6b;">
            </div>
            <div class="col">
                @foreach($product as $products)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title" style="padding-left:20px;">{{$products->title}}</h5>
                                    <div class="card-text" style="overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 5;
  text-overflow: ellipsis;padding: 0 20px 0;line-height:1.5;color:#7C849D;  text-align: justify;
  text-justify: inter-word;"> {!!$products->desc!!}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>

    <div class="container-fluid "
         style="background-image: url('{{asset('tunga')}}/img/bg.png'); margin-top:50px; height:500px;">
        <section class="pt-5 pb-5 ">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h3 class="mb-3 text-center" style="color:white;">What our client says</h3>
                        <br>

                        <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                {{--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" ></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" ></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" ></button>--}}
                                @foreach(range(0,5) as $index => $num)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" @if($index == 0) class="active" @endif ></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach(range(0,5) as $index => $num)

                                    @if($index == 0)
                                        <div class="carousel-item active">
                                    @else
                                        <div class="carousel-item">
                                    @endif
                                            <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="card customer_card">
                                                                <div class="header">
                                                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" class="img-circle" />
                                                                    <div><a href="#" class="publisher-name">Username</a></div>
                                                                </div>
                                                                <p class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card customer_card">
                                                                <div class="header">
                                                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" class="img-circle" />
                                                                    <div><a href="#" class="publisher-name">Username</a></div>
                                                                </div>
                                                                <p class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                         </div>
                                    @endforeach
                                </div>
                            </div>

                            <a class="carousel left customer_control" href="#carouselExampleIndicators" data-slide="prev" data-bs-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>

                            </a>

                            <a class="carousel right customer_control" href="#carouselExampleIndicators" data-slide="next" data-bs-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>

                        </div>
                    </div>

                    </div>


                    {{--<div class="row">

                        <div class="col-md-12">
                            <div class="container content">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                                    <div class="carousel-inner">

                                        @foreach(range(0,5) as $index => $num)

                                            @if($index == 0)
                                                <div class="item active" >
                                            @else
                                                        <div class="item ">
                                            @endif
                                                <div class="row">

                                                <div class="col-md-6">
                                                    <div class="card customer_card">
                                                        <div class="header">
                                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" class="img-circle" />
                                                            <div><a href="#" class="publisher-name">Username</a></div>
                                                        </div>
                                                        <p class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card customer_card">
                                                        <div class="header">
                                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" class="img-circle" />
                                                            <div><a href="#" class="publisher-name">Username</a></div>
                                                        </div>
                                                        <p class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        @endforeach


                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="thumbnail adjust1">
                                                        <div class="col-md-2 col-sm-2 col-xs-12"><img
                                                                class="media-object img-rounded img-responsive"
                                                                src="http://placehold.it/100"></div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <div class="caption"><p class="text-info lead adjust2">I
                                                                    can't wait to test this out.</p>
                                                                <p><span class="glyphicon glyphicon-thumbs-up"></span> This
                                                                    is a testimonial window. Feedback of user can be
                                                                    displayed here.</p>
                                                                <blockquote class="adjust2"><p>Abhijit Goswami</p>
                                                                    <small><cite title="Source Title"><i
                                                                                class="glyphicon glyphicon-globe"></i>
                                                                            www.example2.com</cite></small></blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="thumbnail adjust1">
                                                        <div class="col-md-2 col-sm-2 col-xs-12"><img
                                                                class="media-object img-rounded img-responsive"
                                                                src="http://placehold.it/100"></div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <div class="caption"><p class="text-info lead adjust2">I
                                                                    can't wait to test this out.</p>
                                                                <p><span class="glyphicon glyphicon-thumbs-up"></span> This
                                                                    is a testimonial window. Feedback of user can be
                                                                    displayed here.</p>
                                                                <blockquote class="adjust2"><p>Abhijit Goswami</p>
                                                                    <small><cite title="Source Title"><i
                                                                                class="glyphicon glyphicon-globe"></i>
                                                                            www.example3.com</cite></small></blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- Controls -->

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        @foreach(range(0,5) as $index => $num)
                                            <li data-target="#carousel-example-generic" data-slide-to="{{$index}}" @if($index == 0) class="active" @endif></li>
                                        @endforeach
                                    </ol> <!-- Wrapper for slides -->

                                    <a class="left customer_control" href="#carousel-example-generic" data-slide="prev">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </a>

                                    <a class="right customer_control" href="#carousel-example-generic" data-slide="next">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    </div>--}}

                </div>
            </div>
        </section>
    </div>

    <div class="container-lg" style="margin-top:40px;">
        <?php $blog = DB::table('blogs')->get(); ?>
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

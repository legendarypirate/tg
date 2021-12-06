@extends('layouts.web')
@section('mainContent')
<div class="container" style="margin-top:40px;">
  <div class="row">
    <h1>Үйл явдлууд</h1>

  </div>

</div>

<section class="timeline">

    <div class="container-fluid">

        <h4>{{ __('messages.timeline') }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline4">

                    @foreach(range(1,5) as $num)
                        <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="inner-content">
                                <span class="year">2018</span>
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.--}}


                                @if($loop->iteration % 2 == 0)

                                            <div class="row" style="width: 200%">
                                                <div class="col-md-6 descText">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="timeImg">
                                                        <img src="https://dummyimage.com/600x400/000/fff">
                                                        <img src="https://dummyimage.com/600x400/000/fff">
                                                    </div>
                                                </div>

                                            </div>


                                @else

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="timeImg">
                                                    <img src="https://dummyimage.com/600x400/000/fff">
                                                    <img src="https://dummyimage.com/600x400/000/fff">
                                                </div>
                                            </div>
                                            <div class="col-md-6 descText">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                            </div>
                                        </div>

                                 @endif




                                </p>



                            </div>
                        </a>
                    </div>
                    @endforeach

                        {{--<div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="inner-content">
                                <span class="year">2017</span>
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="inner-content">
                                <span class="year">2016</span>
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="inner-content">
                                <span class="year">2015</span>
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                </p>
                            </div>
                        </a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
